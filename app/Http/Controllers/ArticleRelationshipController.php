<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleRelationshipController extends Controller
{
    public function author()
    {
        return new AuthorResource($article->author);
    }

    public function comments()
    {
        return new CommentResource($article->comments);
    }
}
