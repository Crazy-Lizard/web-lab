<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class NewController extends Controller
// {
//     //
//     public function index() {
//         $message = \App\Models\NewModel::MESSAGE;
//         return view('new', ['message'=>$message]);
//         // return view('new');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index(Request $request) {
        $message = $request->session()->get('message', '');
        return view('new', ['message' => $message]);
    }

    public function handleRequest(Request $request) {
        if ($request->input('action') == 'new') {
            $message = \App\Models\NewModel::MESSAGE;
            $request->session()->put('message', $message);
        } elseif ($request->input('action') == 'old') {
            $request->session()->forget('message');
        }
        return redirect('/new');
    }
}
