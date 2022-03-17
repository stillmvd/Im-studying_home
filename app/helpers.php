<?php

use Illuminate\Support\Facades\DB;

if(! function_exists('validate')) {
    function validate(array $attributes, array $rules): array // что функция вернёт
    {
        return validator($attributes, $rules)->validate();
    }
}

function get_post()
{
    $uri = $_SERVER['REQUEST_URI'];
    $parse_url = parse_url($uri, PHP_URL_PATH);
    $result = explode('/', $parse_url);
    $id = array_pop($result);
    $temp = DB::table('posts')->where('id', '=', $id)->get()->all();

    foreach($temp as $value) {
        $post = (object) [
            'id' => $value->id,
            'alias' => $value->alias,
            'description' => $value->description,
            'category' => $value->category,
        ];
    }

    return $post;
}