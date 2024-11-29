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
    <h1><?= $title ?></h1>
    <div class="container">
        <?php foreach ($posts as $post) { ?>
        <div class="post">
            <?= $post['title']?>
        </div>
        <?php }?>
    </div>
</body>
</html>