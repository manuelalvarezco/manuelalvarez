<?php

namespace App\Http\Controllers\Backend;

use App\Certificate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CertifyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{

    public function index()
    {
        $certificates = Certificate::paginate(10);

        return view('certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('certificates.create');
    }


    public function store(CertifyRequest $request)
    {


        //save
        $certify = Certificate::create($request->all());


        //Image
            if($request->file('file')){
                $certify->image = $request->file('file')->store('certificates','public');
                $certify->save();
            }


        //Return

        return back()->with('status','Saved Corectly!');
    }//


    public function edit(Certificate $certificate)
    {
        return view('certificates.edit', compact('certificate'));
    }


    public function update(CertifyRequest $request, Certificate $certificate)
    {


        $certificate->update($request->all());

        //Imagen
        if($request->file('file')){
            Storage::disk('public')->delete($certificate->image);
            $certificate->image = $request->file('file')->store('certificates','public');
            $certificate->save();
        }


        return back()->with('status','Post updated Correctly!');
    }



    public function destroy(Certificate $certify)
    {
        Storage::disk('public')->delete($certify->image);
        // Delete post
        $certify->delete();

        return back()->with('status', 'Delete Correctly!');
    }


    public function certificates(){

        $certificates = Certificate::latest()->get();

        return response()->json([
            'status' => 'Ok',
            'certificates'   => $certificates
        ]);
    }


}
