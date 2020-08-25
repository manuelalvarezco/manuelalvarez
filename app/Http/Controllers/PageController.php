<?php

namespace App\Http\Controllers;
use App\Post;
use App\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function projects(){
        return view('pages.projects',[
            'projects' => Project::with('user')->latest()->paginate()
        ]);
    }

    public function project(Project $project){

        return view('pages.project',[ 'project' => $project]);
    }

    public function posts(){

        return view('pages.posts',[
            'posts' => Post::with('user')->latest()->paginate()
        ]);
    }

    public function post(Post $post){

        return view('pages.post',[ 'post' => $post]);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

    public function contact(){
        return view('pages.contact');
    }
}
