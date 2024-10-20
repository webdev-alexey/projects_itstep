<?php
$form = [
    0 => [
        'name' => 'Ivanov ',
        'phone' => '375-29-111-11-11 ',
        'e-mail' => 'ivanov@gmail.com '
    ],
    1 => [
        'name' => 'Petrov ',
        'phone' => '375-29-222-11-12 ',
        'e-mail' => 'ivanov@mail.com '
    ],
    2 => [
        'name' => 'Sidorov ',
        'phone' => '375-29-333-11-13 ',
        'e-mail' => 'ivanov@yandex.by '
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
</head>
<body>
<div class="container">
    <h1>Форма через Foreach</h1>
    <ul class="list-unstyled">
        <?php foreach ($form as $value): ?>
            <li class="media">
                <p><b>Name: </b> <?= $value['name'];?></p>
                <p><b>Phone: </b> <?= $value['phone'];?></p>
                <p><b>E-mail: </b> <?= $value['e-mail'];?></p>
            </li>
        <?php endforeach;?>
    </ul>
</div>
</body>
</html>