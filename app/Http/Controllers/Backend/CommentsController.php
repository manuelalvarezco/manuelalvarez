<?php

namespace App\Http\Controllers\Backend;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;


class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {

        //save
        $comment = Comment::create( $request->all());

        $comment->save();


        //Return

        return back()->with('status','Comentario enviado correctamente');
    }
}
