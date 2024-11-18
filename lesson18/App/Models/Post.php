<?php

namespace App\Models;

use Core\Model;

class Post{
    public static function getAll(){   
        $db = Model::getDB();
        $result = $db->query('SELECT * FROM posts');
        return $result;
    }
}
?>