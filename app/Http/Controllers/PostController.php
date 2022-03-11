<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
        $categories = [
            1001 => 'Стрижка',
            1002 => 'Глажка',
            1003 => 'Уход',
            1004 => 'Маникюр',
            1005 => 'Клининг',
        ];

        return view('user.posts.create', compact('categories'));
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'alias' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:200'],
            'category' => ['required'],
            'photo' => ['nullable', 'file', 'image', 'max:8000'],
        ]);
        
        DB::table('posts')->insert([
            'user_id' => auth()->id(),
            'alias' => $validated['alias'],
            'description' => $validated['description'],
            'category' => $validated['category_id'],
        ]);
        
        return redirect()->route('user.posts');
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