<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlbumModel; 

class AlbumController extends Controller
{
    //
    public function index() { 
        $album = new AlbumModel(); 
        $images = $album->getImages(); 
        return view('album', ['images' => $images]); 
    } 
}
