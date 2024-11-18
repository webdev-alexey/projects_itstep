<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;

class Users {

    public function index()
    {
        $users = User::getUsers();
        View::render('user/index.php', [
            'title' => 'Users',
            'users' => $users
        ]);
    }
}