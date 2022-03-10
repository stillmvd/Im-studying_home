<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        DB::table('posts')->insert([
            'alias' => '$alias',
            'description' => '$description',
            'category' => '$category',
        ]);
    }
}
