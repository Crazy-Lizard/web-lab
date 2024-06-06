<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumModel extends Model
{
    // use HasFactory;
    private array $images = [ 
        ["title" => "lizard 1", "src" => "/images/lizard1-p.jpg"], 
        ["title" => "lizard 2", "src" => "/images/lizard2-p.jpg"],  
        ["title" => "lizard 3", "src" => "/images/lizard3-p.jpg"],  
        ["title" => "lizard 4", "src" => "/images/lizard4-p.jpg"],  
        ["title" => "lizard 5", "src" => "/images/lizard5-p.jpg"],  
        ["title" => "lizard 6", "src" => "/images/lizard6-p.jpg"],  
        ["title" => "lizard 7", "src" => "/images/lizard7-p.jpg"],  
        ["title" => "lizard 8", "src" => "/images/lizard8-p.jpg"],  
        ["title" => "lizard 9", "src" => "/images/lizard9-p.jpg"],  
        ["title" => "lizard 10", "src" => "/images/lizard10-p.jpg"],  
        ["title" => "lizard 11", "src" => "/images/lizard11-p.jpg"],  
        ["title" => "lizard 12", "src" => "/images/lizard12-p.jpg"],  
        ["title" => "lizard 13", "src" => "/images/lizard13-p.jpg"],  
        ["title" => "lizard 14", "src" => "/images/lizard14-p.jpg"],   
        ["title" => "lizard 15", "src" => "/images/lizard15-p.jpg"],   
        ["title" => "lizard 16", "src" => "/images/lizard16-p.jpg"] 
    ]; 
 
    public function getImages() { 
        return $this->images; 
    }
}
