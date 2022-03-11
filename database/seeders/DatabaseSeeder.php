<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'косметика',
        ]);
        DB::table('categories')->insert([
            'name' => 'маникюр',
        ]);
        DB::table('categories')->insert([
            'name' => 'стрижка',
        ]);
        DB::table('categories')->insert([
            'name' => 'брови',
        ]);
        DB::table('categories')->insert([
            'name' => 'причёска',
        ]);
        DB::table('categories')->insert([
            'name' => 'зубы',
        ]);
    }
}
