<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class MyBlogController extends Controller
{
    //
    public function action_index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(2);
        return view('myblog', compact('posts'));
    }

    public function show($id)
    {
        $post = BlogPost::where('id', $id)->first();
        return response()->json($post);
    }
}
