<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('bad-mouth')->only('store');
    }

    public function store($id) {
        $comment = new Comment();
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $id;
        $comment->save();

        return redirect('teams/' . $id);

    }
}