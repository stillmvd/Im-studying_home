<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index(Request $request) {

        $posts = DB::table('posts')->paginate(6);
        $data = DB::table('categories')->get()->all();

        $categories = [];
        foreach($data as $key => $category) {
            $categories = Arr::add($categories, $category->id, $category->name);
        }

        // Фильтрация заявок
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        // $posts = array_filter($posts, function($post) use($search, $category_id) {
        //     if($search && ! str_contains(strtolower($post->alias), strtolower($search))) {
        //         return false;
        //     }
        //     if($category_id && $post->category_id != $category_id) {
        //         return false;
        //     }
        //     return true;
        // });
       
        return view('blog.index', compact('categories', 'posts'));
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
