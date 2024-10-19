<?php
    $posts = [
        0 => [
            'title' => 'List-based media object 1',
            'slug' => 'list-based-media',
            'author' => 'Author 1',
            'description' => 'Cras sit amet nibh libero, in g
            ravida nulla. Nulla vel metus scelerisque ante sollicitudin.
             Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
             Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ],
        1 => [
            'title' => 'List-based media object 2',
            'author' => 'Author 1',
            'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ],
        2 => [
            'title' => 'List-based media object 3',
            'author' => 'Author 1',
            'description' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'
        ]
    ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Blog</h1>
    <ul class="list-unstyled">
        <?php foreach ($posts as $value): ?>
            <li class="media">
                <p><?= $value['author'];?></p>
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><a href="<?= $value['slug'];?>"><?= $value['title'];?></a></h5>
                    <p><?= date('Y-m-d');?></p>
                    <?= $value['description'];?>
                    <p><a href="<?= $value['slug'];?>">Readmore</a></p>
                </div>
            </li>
        <?php endforeach;?>
    </ul>
</div>
</body>
</html>