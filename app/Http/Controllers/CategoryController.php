<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,Category $category)
    {
        $posts =$category->posts()->with('categories')->published()->paginate(3);
        return view('category.show',['category' => $category,'posts' => $posts]);
    }
}
