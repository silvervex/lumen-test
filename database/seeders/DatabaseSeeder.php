<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // Disable foreign key checking because truncate() will fail
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Post::truncate();
        Comment::truncate();

        factory(User::class, 10)->create();
        factory(Post::class, 50)->create();
        factory(Comment::class, 100)->create();
        
        // Enable it back
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
