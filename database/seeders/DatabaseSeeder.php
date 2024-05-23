<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Joacim',
            'email' => 'joacim@josiasmusik.se',
            'password' => Hash::make('password')
        ]);

        Post::factory(10)->create([
            'author_id' => $user->id,
            'category' => 'travel'
        ]);

        Post::factory(10)->create([
            'author_id' => $user->id,
            'category' => 'life'
        ]);
    }
}
