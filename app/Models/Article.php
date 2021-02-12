<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
