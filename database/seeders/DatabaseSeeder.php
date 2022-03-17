<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Стрижка'],
            ['name' => 'Глажка'],
            ['name' => 'Уход'],
            ['name' => 'Маникюр'],
            ['name' => 'Клининг'],
        ]);

        DB::table('users')->insert([
            'created_at' => now(),
            'updated_at' => now(),
            'identity' => 'VssLocker',
            'login' => 'VssLocker',
            'email' => 'asslocker@vk.com',
            'admin' => '1',
            'password' => Hash::make('Admin102938'),
        ]);

        DB::table('posts')->insert([
            ['user_id' => 1001, 'alias' => 'Том', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1005','category' => 'Клининг'],
            ['user_id' => 1001, 'alias' => 'Муся', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1002','category' => 'Глажка'],
            ['user_id' => 1001, 'alias' => 'Линкольн', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1005','category' => 'Клининг'],
            ['user_id' => 1001, 'alias' => 'Мопед', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1001','category' => 'Стрижка'],
            ['user_id' => 1001, 'alias' => 'Кринж', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1003','category' => 'Уход'],
            ['user_id' => 1001, 'alias' => 'Сланец', 'description' => 'Выполнение косметических работ с питомцем', 'category_id' => '1003','category' => 'Уход'],
        ]);
    }
}
