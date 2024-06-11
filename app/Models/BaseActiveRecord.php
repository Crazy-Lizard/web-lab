<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseActiveRecord extends Model
{
    protected $table = 'your_table_name';
    protected $fillable = ['column1', 'column2'];
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
}
