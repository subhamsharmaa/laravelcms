<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::with('categories')->post()->published()->orderBy('published_at','desc')->paginate(9);
        return view('home',['posts' => $posts]);
    }
}
