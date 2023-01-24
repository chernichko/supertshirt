<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;

class BlogController extends Controller
{

    public function index()
    {
        $articles = BlogModel::with('author')->get();

        // dd($articles);

        return view('blog.index', compact('articles'));
    }

    public function article(BlogModel $blogModel)
    {

        return view('blog.article', ['article' => $blogModel]);
    }

}
