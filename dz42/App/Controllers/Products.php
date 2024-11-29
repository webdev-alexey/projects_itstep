<?php

namespace App\Controllers;

use App\Models\Post;
use App\Models\Product;
use Core\View;

class Products {

    public function index()
    {
        View::render('products/index.php');
    }

    public function show()
    {
        $products = Product::getAll();
        View::render('products/show.php', [
            'title' => 'Продукты',
            'products' => $products
        ]);
    }
    public function item()
    {
        View::render('products/item.php');
    }
}