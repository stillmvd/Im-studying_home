<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index() {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
        ];
        
        $posts = array_fill(0, 6, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create() {
        return view('user.posts.create');
    }

    public function store(Request $request) {
        $data = $request->all();

        $alias = $request->input('alias');
        $description = $request->input('description');
        $category = $request->input('category');
        $photo = $request->file('photo');

        dd($alias, $description, $category, $photo);

        return 'Запрос создания поста';
    }
    
    public function show($post) {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
        ];

        $posts = array_fill(0, 6, $post);

        return view('user.posts.show', compact('post'));
    }

    public function edit($post) {
        $post = (object) [
            'id' => '123',
            'alias' => 'Tommy Cash',
            'description' => 'Работа по проведению косметических работ с питомцем',
            'category' => 'Косметика',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request) {
        $data = $request->all();
        
        $alias = $request->input('alias');
        $description = $request->input('description');
        $category = $request->input('category');
        $photo = $request->file('photo');

        dd($alias, $description, $category, $photo);
    }

    public function delete() {
        return 'Запрос удаления поста';
    }
}