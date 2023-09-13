<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'subhan',
            'email' => 'subhan@gmail.com',
            'password' => bcrypt('password123')
        ]);
        Categories::create(
            [
                'id' => 1,
                'categories_name' => 'CATS',

            ],
            [
                'id' => 2,
                'categories_name' => 'SNIKERS',
            ]
        );
    }
}
