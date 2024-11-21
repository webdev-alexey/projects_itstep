<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 27.01.2019
 * Time: 16:56
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 1</title>
</head>
<body>
    <p>Привет мир!</p>
    <?php ?> <!-- вставка php-кода -->
    <?php
        echo '<p>Привет мир!</p>'; /*вывод на экран*/
        print '<p>Привет мир 2!</p>'; /*вывод на экран, аналогично echo, отличий нет*/
        // однострочный комментарий
        # однострочный комментарий, редко используют
        /*
            многострочный комментарий
        */
    ?>
</body>
</html>
