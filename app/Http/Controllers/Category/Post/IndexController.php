<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Category $category) {
        $posts = $category->posts()->paginate(6);
        return view('categories.posts.index', compact('category', 'posts'));
    }
}
