<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

	// show the blog index
    public function index()
    {
    	$articles = Article::where('published_at','<=',Carbon::now())
    	->orderBy('published_at','desc')
    	->paginate(config('blog.articles_per_page'));
    
    	return view('fedora.blog.index',compact('articles'));
    }


   //show the posts
    public function showPost($slug)
    {
    	$article = Article::whereSlug($slug)->firstOrFail();
    	return view('fedora.blog.post')->withArticle($article);
    }

}
