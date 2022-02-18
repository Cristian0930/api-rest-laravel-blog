<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            echo "<h1>{$category->name}</h1>";
            foreach ($category->posts as $post) {
                echo "<h3>$post->title</h3>";
                echo "<span style='color: gray'>{$post->user->name} - {$post->category->name}</span>";
                echo "<p>$post->content</p>";
            }
            echo "<hr />";
        }
        die();
    }
}
