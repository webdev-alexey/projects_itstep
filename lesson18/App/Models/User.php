<?php

namespace App\Models;

use Core\Model;

class User{
    public static function getUsers(){   
        $db = Model::getDB();
        $result = $db->query('SELECT * FROM users');
        return $result;
    }
}
?>