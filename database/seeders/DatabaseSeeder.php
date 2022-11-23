<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abbas Zabier',
            'email' => 'abbaszabier@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        Category::create([
            'name' => 'UI Design',
            'slug' => 'ui-design'
        ]);
        Category::create([
            'name' => 'Frontend',
            'slug' => 'frontend'
        ]);

        Post::factory(6)->create();
    }
}