<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->category_id = 2;
        $post->title = 'Samsung Galaxy S8';
        $post->content = 'Contenido de Samsung Galaxy S8';
        $post->save();

        $post2 = new Post();
        $post2->user_id = 1;
        $post2->category_id = 1;
        $post2->title = 'Asus Rog Strix';
        $post2->content = 'Contenido de Asus Rog Strix';
        $post2->save();

        $post3 = new Post();
        $post3->user_id = 1;
        $post3->category_id = 1;
        $post3->title = 'MSI Power';
        $post3->content = 'Contenido de MSI Power';
        $post3->save();
    }
}
