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
<!--1. При помощи цикла for выведите все нечетные числа от 1 до 50;-->
<?php
echo "1. При помощи цикла for выведите все нечетные числа от 1 до 50: ";
for($i=1; $i<=50; $i++){
    if($i%2) {
        echo $i . " ";
    }
}
echo "<br>";
?>
<!--2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;-->
<?php
echo "2. При помощи цикла while вывести список категорий. Результат Категория 1, Категория 2, и т.д.;";
echo "<br>";
$a=1;
while ($a<10):
    echo "Категория ", $a."<br>";
    $a++;
    endwhile;
?>
<!--3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);-->
<!--3-е задание подключено как требует 6-е задание через команду require_once zadanie3.php-->
<?php
echo "3. Написать скрипт, который выведет Заголовок, Дату и Имя автора, Картину поста (цикл while);";
echo "<br>";
    require_once 'zadanie3.php';
?>
<!--4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;-->
<?php
echo "4. При помощи цикла foreach вывести список категорий. Результат Категория 1, Категория 2, и т.д.;";
echo "<br>";
$arr = [
        1, 2, 3, 4, 50
];
//var_dump($arr);
foreach ($arr as $value){
    echo "Категория ", $value;
    echo "<br>";
}
?>
<!--5. При помощи цикла foreach вывести форму с определенными полями.-->
<!--5-е задание подключено как требует 6-е задание через команду require_once zadanie5.php-->
<?php
echo "5. При помощи цикла foreach вывести форму с определенными полями.";
echo "<br>";
require_once 'zadanie5.php';
?>
<!--6. Написать скрипт вывода формы, в котором задействовать подключение конструкци require_once;-->
<!--7. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case.-->
<?php
echo "7. Задача. Переменная $lang может принимать два значения: 'ru' и 'en'. Если она имеет значение 'ru', то в переменную $arr запишем массив дней недели на русском языке, а если имеет значение 'en' – то на английском. Решите задачу через 2 if, через switch-case.";
echo "<br>";
$lang_ifelse = "en";
$arrRu = [
    'Понедельник', 'Вторник', 'Среда', 'Четверг','Пятница','Суббота','Воскресенье'
];
$arrEn = [
    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'
];
//var_dump($arrRu);
echo "<b>Решение через if-else, выбран язык Английский</b>";
echo "<br>";
if($lang_ifelse == "ru"){
    foreach ($arrRu as $value){
        echo $value;
        echo "<br>";
    }

}elseif($lang_ifelse == "en"){
    foreach ($arrEn as $value){
        echo $value;
        echo "<br>";
    }
}else{
    echo 'Некорректные данные';
}
echo "<b>Решение через switch-case, выбран язык Русский</b>";
echo "<br>";
$lang_switch = "ru";
switch ($lang_switch){
    case "ru":
        foreach ($arrRu as $value){
            echo $value;
            echo "<br>";
        };
        break;
        case "en":
            foreach ($arrEn as $value){
                echo $value;
                echo "<br>";
            };
        break;

}
?>