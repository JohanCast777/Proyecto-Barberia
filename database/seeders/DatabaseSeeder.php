<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\UserFactory;
use App\Models\Comment;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Metadata\Uses;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Comment::factory(10)->create();
        $this->call([
            UsersSeeder::class,
            //CommetSeeder::class,
            // Add other seeders here
        ]);
    }
}
