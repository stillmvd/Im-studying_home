<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        // Временный пост
        $post = (object) [
            'id' => 'reply',
            'title' => 'Заголовок заявки',
            'content' => 'Большой большой текст заявки',
        ];
        
        $posts = array_fill(0, 6, $post);

        return view('blog.index', compact('posts'));
    }
    
    public function show() {
        $post = (object) [
            'id' => 'reply',
            'title' => 'Заголовок заявки',
            'content' => 'Большой большой текст заявки',
        ];

        return view('blog.show', compact('post'));
    }
}
