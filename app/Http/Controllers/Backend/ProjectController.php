<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Project;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {


        //save
        $project = Project::create([
             'user_id' => auth()->user()->id
        ] + $request->all());


        //Image
            if($request->file('file')){
                $project->image = $request->file('file')->store('projects','public');
                $project->save();
            }


        //Return

        return back()->with('status','Saved Corectly!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->all());

        //Imagen
        if($request->file('file')){
            Storage::disk('public')->delete($project->image);
            $project->image = $request->file('file')->store('projects','public');
            $project->save();
        }


        return back()->with('status','Post updated Correctly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::disk('public')->delete($project->image);
        // Delete post
        $project->delete();

        return back()->with('status', 'Delete Correctly!');
    }

    public function indexApi()
    {
        $projects = Project::latest()->get();

        return response()->json($projects);
    }

    public function angular(){
        $projects = Project::where('tecnology','Angular')->get();

        return response()->json($projects);
    }
    public function laravel(){
        $projects = Project::where('tecnology','Laravel')->get();

        return response()->json($projects);
    }
    public function vue(){
        $projects = Project::where('tecnology','Vue')->get();

        return response()->json($projects);
    }
}
