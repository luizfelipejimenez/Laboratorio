<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         // \App\Models\Post::factory(30)->create([
           //  'content' => fake()->text(100),
           //  'title' => fake()->sentence(),
            // 'image' => fake()->imageUrl(640, 480, 'animals', true),
            // 'type_id' => 1,
            // 'status_id' => 1
         //]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
