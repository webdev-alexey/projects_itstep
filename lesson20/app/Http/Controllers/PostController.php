<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //return 'index';
        $title = 'title';
        return view('posts.index', compact ('title'));
    }
}
