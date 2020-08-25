<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ServicesController extends Controller
{

    public function index()
    {
        $services = Service::paginate(10);

        return view('services.index', compact('services'));
    }


    public function store(ServiceRequest $request)
    {


        //save
        $service = Service::create([
             'user_id' => auth()->user()->id
        ] + $request->all());


        //Image
            if($request->file('file')){
                $service->image = $request->file('file')->store('services','public');
                $service->save();
            }


        //Return

        return back()->with('status','Saved Corectly!');
    }//

    public function destroy(Service $service)
    {
        Storage::disk('public')->delete($service->image);
        // Delete post
        $service->delete();

        return back()->with('status', 'Delete Correctly!');
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }


    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->all());

        //Imagen
        if($request->file('file')){
            Storage::disk('public')->delete($service->image);
            $service->image = $request->file('file')->store('services','public');
            $service->save();
        }


        return back()->with('status','Post updated Correctly!');
    }

    public function services(){

        $services = Service::latest()->get();

        return response()->json([
            'status' => 'Ok',
            'services'   => $services
        ]);
    }
}

