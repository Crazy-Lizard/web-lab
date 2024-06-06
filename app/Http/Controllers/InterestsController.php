<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InterestsModel; 

class InterestsController extends Controller
{
    //
    public function index()
    {
        $interests = \App\Models\InterestsModel::INTERESTS;
        return view('interests', ['interests' => $interests]);
        // return view('interests');
    }
}
