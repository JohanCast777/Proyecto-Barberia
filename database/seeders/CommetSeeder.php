<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comment = new Comment();
        $comment->user_id = 1; // Assuming the user with ID 1 exists
        $comment->content = 'This is a comment';
        $comment->save();

    }
}