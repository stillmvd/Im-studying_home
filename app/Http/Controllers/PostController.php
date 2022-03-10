<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {
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
        $validated = validate($request->all(), [
            'alias' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:200'],
            'category' => ['required', 'string'],
            'photo' => ['required', 'file', 'image', 'max:8000'],
        ]);
        
        dd($validated);

        return redirect()->route('user.posts.show', 123);
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

    public function update(Request $request, $post) {
        $validated = validate($request->all(), [
            'alias' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:200'],
            'category' => ['required'],
            'photo' => ['nullable', 'file', 'image', 'max:8000'],
        ]);

        dd($validated);

        return redirect()->back();
    }
    
    public function delete($post) {
        return redirect()->route('user.posts');
    }
}