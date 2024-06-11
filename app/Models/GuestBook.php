<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestBook extends Model
{
    protected $table = 'guestbook';
    protected $fillable = ['idguestbook', 'created_at', 'surname', 'name', 'email', 'message'];
}
