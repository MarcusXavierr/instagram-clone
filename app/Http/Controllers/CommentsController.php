<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store()
    {
        $data = request()->validate([
            'comment' => '',
            'post_id' => '',
            'user_id' => '',
            'username' => '',
        ]);

        auth()->user()->comments()->create([
            'comment' => $data['comment'],
            'post_id' => $data['post_id'],
            'user_id' => $data['user_id'],
            'name' => $data['username']

        ]);


        return redirect("/p/" . $data['post_id']);
    }
}
