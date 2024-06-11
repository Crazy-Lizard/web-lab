<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validators\FormValidation;
// use App\Models\Comment;
use App\Models\BlogPost;
use Carbon\Carbon;

class BlogController extends Controller
{
    //
    public function action_index()
    {
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(10);
        return view('blog', ['posts' => $posts]);
    }
    public function store(Request $request)
    {
        $validator = new FormValidation;

        $validator->setRule('title', 'isNotEmpty');
        $validator->setRule('content', 'isNotEmpty');

        $validator->validate($request->all());

        if ($validator->hasErrors()) {
            return back()->withErrors($validator->showErrors())->withInput();
        }

        $post = new BlogPost;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->created_at = Carbon::now();

        if ($request->hasFile('image')) {
            $image = file_get_contents($request->file('image')->getRealPath());
            $post->image = base64_encode($image);
        }

        $post->save();

        return redirect('/blog');
    }

    // public function fetchComments($id)
    // {
    //     $comments = Comment::with('author')->where('post_id', $id)->get();
    //     return response()->json($comments);
    // }

    // public function postComment(Request $request, $id)
    // {
    //     error_log($request);
    //     $comment = new Comment();

    //     $comment->post_id = $id;
    //     $comment->author_id = auth()->user()->id;
    //     $comment->content = $request->input('content');

    //     $comment->save();

    //     return response()->json([
    //         'message' => 'Comment added successfully!',
    //         'comment' => $comment
    //     ]);
    // }
}
