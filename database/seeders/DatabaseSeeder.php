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
        // \App\Models\User::factory(10)->create();
       User::create([
       	'name' => 'Nico Ariest',
       	'email' => 'Nico@gmail.com',
       	'password' =>bcrypt('12345')
       ]);

       Category::create([
       		'name' => 'Web Programming',
       		'slug' => 'web-programming'
       ]);
       Category::create([
       		'name' => 'Personal',
       		'slug' => 'personal'
       ]);

       Post::create([
       		'title' => 'Judul 1',
       		'slug' => 'Judul 1',
       		'excerpt' => 'subtitle judul 1',
       		'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae consequatur amet nisi saepe illum, autem maxime. Nam error quam earum, possimus perferendis hic, ipsa id, quia labore aut voluptatum praesentium?',
       		'category_id' => 1,
       		'user_id' => 1,
            'author' => "test"
       ]);

       Post::create([
            'title' => 'Judul 2',
            'slug' => 'Judul 2',
            'excerpt' => 'subtitle judul 2',
            'body' => '       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae consequatur amet nisi saepe illum, autem maxime. Nam error quam earum, possimus perferendis hic, ipsa id, quia labore aut voluptatum praesentium?',
            'category_id' => 2,
            'user_id' => 1,
            'author' => "test 2"
]);
    }
}
