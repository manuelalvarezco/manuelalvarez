<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {


        //save
        $post = Post::create([
             'user_id' => auth()->user()->id
        ] + $request->all());


        //Image
            if($request->file('file')){
                $post->image = $request->file('file')->store('posts','public');
                $post->save();
            }


        //Return

        return back()->with('status','Saved Corectly!');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        //Imagen
        if($request->file('file')){
            Storage::disk('public')->delete($post->image);
            $post->image = $request->file('file')->store('posts','public');
            $post->save();
        }


        return back()->with('status','Post updated Correctly!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        // Delete post
        $post->delete();

        return back()->with('status', 'Delete Correctly!');
    }



    public function postsUpdate(Request $request){

        $post = Post::find($request->id);

        if($request->likes){
            $post->likes = $request->likes;
        }
        if($request->hearts){
            $post->hearts = $request->hearts;
        }

        $post->update();

        return response()->json([
            'status' => 'Ok',
            'post'   => $post
        ]);
    }


    public function posts()
    {
        $posts = Post::all();

        return response()->json($posts);
    }
}
