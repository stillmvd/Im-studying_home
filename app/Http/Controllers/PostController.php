<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request) {
        $posts = DB::table('posts')->where('user_id', '=', auth()->id())->paginate(6);

        return view('user.posts.index', compact('posts'));
    }

    public function create() {
        $data = DB::table('categories')->get()->all();
        
        $categories = [];
        foreach($data as $key => $category) {
            $categories = Arr::add($categories, $category->id, $category->name);
        }

        return view('user.posts.create', compact('categories'));
    }

    public function store(Request $request) {
        $validated = validate($request->all(), [
            'alias' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:200'],
            'category' => ['required'],
            'photo' => ['nullable', 'file', 'image', 'max:8000'],
        ]);
        
        $id = DB::table('posts')->insertGetId([
            'user_id' => auth()->id(),
            'alias' => $validated['alias'],
            'description' => $validated['description'],
            'category' => $validated['category'],
            'category_id' => DB::table('categories')->where('name', $validated['category'])->value('id'),
        ]);
        
        return redirect()->route('user.posts.show', $id);
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