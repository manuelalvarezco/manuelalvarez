<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostTag;
use App\Tag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('post-tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ids_tags = $request->tags_id;

        for($i=0; $i<sizeof($ids_tags); $i++){

            $data = array(
                'tag_id'  => $ids_tags[$i],
                'post_id' => $request->post_id,
            );

            $postTag = PostTag::create($data);
        }

        //return $array;

       $postTag->save();




        return response()->json([
            'status' => 401,
            'data'   => $postTag
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function show(PostTag $postTag)
    {
        //
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostTag $postTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostTag  $postTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostTag $postTag)
    {
        //
    }
}
