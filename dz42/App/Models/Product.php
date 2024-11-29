<?php

namespace App\Models;

use Core\Model;

class Product extends Model {
    public static function getAll() {
        $db = Model::getDB();
        $result1 = $db->query('SELECT * FROM products');

        return $result1;
    }
}


?>