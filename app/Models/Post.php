<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'Post';

    protected $fillable = [
        'name',
        'date',
        'description',

    ];


}
