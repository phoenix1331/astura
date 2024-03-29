<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'slug', 'photo', 'copy'];
    protected $guarded = [];
}
