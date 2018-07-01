<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Article;

class BlogController extends Controller
{
    public function category($hash)
    {
        $category = Category::where('hash', $hash)->first();
        return view('blog.category', [
            'category' => $category,
            'articleList' => $category->getArticles()->where('status', 1)->paginate(10),
        ]);
    }

    public function article($hash)
    {
        return view('blog.article',[
            'article' => Article::where('hash', $hash)->first(),
        ]);
    }
}
