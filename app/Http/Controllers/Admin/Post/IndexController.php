<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke() {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }
}
