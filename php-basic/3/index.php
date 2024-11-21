<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 27.01.2019
 * Time: 16:56
 */
    /*Переменные:*/
    $title = 'hello world!';
    $title = 'page title'; /*перезаписали переменную var*/
    $fruit = 'apple';
    $winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s"; /*кирилицей называть можно, но не рекомендуется. Плохой тон!
                                                          в одинарных, переменная не отработает
                                                          {} - операторные скобки, внутри скобок явно указано имя переменной
                                                          */
    $winniePooh = "Hello, I'm Winnie"; //Кэмэл кейс, стиль (верблюжий), в JS чаще используют
    $var = '123';
    $Var = '456'; /*переменные зависят от регистра + в нижнем регистре
                    выдает PHP ошибку Notice, если переменная не определена
                    */
    /*Константы:*/
    define("PAGE", "new page"); /*в верхнем регистре принято писать, (ИМЯ, ЗНАЧЕНИЕ). Данный способ предпочтительнее*/
    const PAGE2 = 'new const'; /* - в версии PHP 5.3> работает, пришло с ООП
                                  - можно использовать только вначале кода
                                */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title>Урок 2. Переменные и константы</title>-->
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p><?php echo $winnie_pooh; ?></p>
    <p><?php echo PAGE; ?></p> <!--В ковычках константа не обрабатывается-->
    <p><?php echo PAGE2; ?></p>
</body>
</html>
