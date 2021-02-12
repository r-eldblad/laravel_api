<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
