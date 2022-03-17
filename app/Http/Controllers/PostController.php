<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{

    // ---------------- метод GET
    public function index() {
        $posts = DB::table('posts')->where('user_id', '=', auth()->id())->paginate(6)->items();
        $paginated = DB::table('posts')->where('user_id', '=', auth()->id())->paginate(6);
        $number = count(DB::table('posts')->where('user_id', '=', auth()->id())->get()->all());
        return view('user.posts.index', compact('posts', 'paginated', 'number'));
    }
// ----------------
    public function create() {
        $data = DB::table('categories')->get()->all();
        
        $categories = [];
        foreach($data as $key => $category) {
            $categories = Arr::add($categories, $category->id, $category->name);
        }

        return view('user.posts.create', compact('categories'));
    }
// ----------------
    public function show() {
        $posts = DB::table('posts')->where('user_id', '=', auth()->id())->paginate(6)->items();
        $number = count(DB::table('posts')->where('user_id', '=', auth()->id())->get()->all());
        $paginated = DB::table('posts')->where('user_id', '=', auth()->id())->paginate(6);
        return view('user.posts.show', compact('posts', 'paginated', 'number'));
    }
// ----------------
    public function edit(Post $post) {
        return view('user.posts.edit', compact('post'));
    }

    // ---------------- метод POST
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
            'category' => $validated['category'],
            'category_id' => DB::table('categories')->where('name', $validated['category'])->value('id'),
        ]);
        
        return redirect()->route('user.posts');
    }

    // ---------------- метод DELETE
    public function destroy(Post $post) {
        DB::table('posts')->where('id', '=', $post->id)->delete();
        return redirect()->back();
    }

    // ---------------- метод PUT
    public function update(Request $request, $post) {
        $validated = validate($request->all(), [
            'alias' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'max:200'],
            'category' => ['required'],
            'photo' => ['nullable', 'file', 'image', 'max:8000'],
        ]);

        return redirect()->back();
    }
}