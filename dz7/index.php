<?php
	//Инициализируем сессию:
	session_start();
    //Для задачи №2
    $_SESSION['zadanie2'] = 'Testik';
    //Для задачи №4
    if(!isset($_SESSION['country'])){
        $_SESSION['country'] = $_REQUEST['country'];
        //var_dump($_SESSION);
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Сессии</title>
    </head>

    <body>
       <p>Задание 4. Cделайте две страницы: index.php и test.php. ѕри заходе на index.php спросите с помощью формы страну пользовател¤, запишите ее в сессию (форма при этом должна отправитс¤ на эту же страницу). ѕусть затем пользователь зайдет на страницу test.php - выведите там страну пользовател¤.</p>
        <form action="" method="get">
            <span>Страна:</span>
            <input name="country">
            <input type="submit" name="submit">

        </form>
        <a href="test.php">Ссылка на test.php (для задания 4)</a><br>
        <a href="zad1.php">Задание 1</a><br>
        <a href="zad2.php">Задание 2</a><br>
        <a href="zad3.php">Задание 3</a><br>
        <a href="zad5.php">Задание 5</a><br>
    </body>

    </html>
