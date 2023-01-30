<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;

class BlogController extends Controller
{

    public function index()
    {
        $articles = BlogModel::with('author')->get();
        $recentBlog = $articles->random(3);

        return view('blog.index', compact('articles','recentBlog'));
    }

    public function article(BlogModel $blogModel)
    {
        $recentBlog = $blogModel->with('author')->get()->random(3);
        return view('blog.article', ['article' => $blogModel,'recentBlog'=>$recentBlog]);
    }

}
