<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        // Временный пост
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
        ];
        
        $posts = array_fill(0, 6, $post);

        return view('blog.index', compact('posts'));
    }
    
    public function show() {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
        ];

        return view('blog.show', compact('post'));
    }
}
