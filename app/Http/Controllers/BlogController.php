<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class BlogController extends Controller
{
    public function index(Request $request) {

        $posts = DB::table('posts')->get()->all();

        $categories = [
            1001 => 'Стрижка',
            1002 => 'Глажка',
            1003 => 'Уход',
            1004 => 'Маникюр',
            1005 => 'Клининг',
        ];

        // Фильтрация заявок
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
        $post = $posts[id];

        return view('blog.show', compact('post'));
    }
}
