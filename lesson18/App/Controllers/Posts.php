<?php

namespace App\Controllers;

use Core\View;
use App\Models\Post;

class Posts {

    public function index()
    {   
        View::render('posts/index.php');
    }

    public function show()
    {
        $posts = Post::getAll();
        View::render('posts/show.php', [
            'title' => 'Новости',
          //  'posts' => ['post1', 'post2', 'post3']
            'posts' => $posts
        ]);
    }
    public function create()
    {
        View::render('posts/create.php');
    }
}