<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
            'category_id' => 1,
        ];

        $categories = [
            null => __('Выберите категорию'),
            1 => 'Косметика',
            2 => 'Стрижка'
        ];

        // Фильтрация заявок
        $posts = array_fill(0, 6, $post);

        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $posts = array_filter($posts, function($post) use($search, $category_id) {
            if($search && ! str_contains(strtolower($post->alias), strtolower($search))) {
                return false;
            }

            if($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        return view('blog.index', compact('posts', 'categories'));
    }
    
    public function show() {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению <b>косметических работ</b> с питомцем',
            'category' => 'Косметика',
            'category_id' => 1,
        ];

        return view('blog.show', compact('post'));
    }
}
