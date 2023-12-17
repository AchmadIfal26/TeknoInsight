<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Achmad Ifal',
            'username' => 'AchmadIfal',
            'email' => 'achmadifal@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Al Farazy',
        //     'email' => 'alfarazy@gmail.com',
        //     'password' => bcrypt('AlFarazy')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


    }
}
