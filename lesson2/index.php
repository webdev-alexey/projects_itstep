<?php
    //echo "Hello world!"; //вывод текста
    //Переменные
    //$var != $vaR;
    //$var_FR67
    //$str = "lorem";
    //$str = 12;
    //нельзя объявлять переменные: str = "", 45str;
    //echo $str;
    //echo PHP_INT_MAX; //integer константа max
    //Array
    //$array = [];
    //$array = Array();//php 5.5
/*    $arr = ["orange", "red", "white"]; //простой массив
    echo $arr[0]; //orange
    $assoc = [
        'color' => 'red',
        'age' => 25,
        'nickname' => 'Max'
    ];
    class A[]
    $obj = new A;
    $obj->color = 'red';

    //echo $assoc['color']; //red
    echo $obj->color; //red
    TRUE == 1; //true
    FALSE == 0; //false
    "" == FALSE; // пустая строка
    " " == TRUE; //не пустая строка
    $var = true;
    echo $var++; //не действует инкремент
    $var = NULL; //пустое значение*/
    /*Проверка на существование переменной*/
/*    $var =["orange","red","white"];
    unset($var); //удаление переменной
    unset($var['1']); //удаление значения массива
    print_r($var); //Отладка массива
    echo count($var).PHP_EOL; //длинна массива PHP_EOL - пробел

    if(isset($var)){
        echo "ok";
    }else{
        echo "not";
    }*/
/*    $var = 45;
    echo is_int($var); //возвращает тру 1, либо фелс ничего
    echo gettype($var); //проверка типа данных
    $var = (bool)0;
    var_dump($var);*/
/*
    $var = 90;
    $var1 = 90;
    echo "$var + $var1"; //покажет значения
    echo '$var + $var1'; //покажет переменные*/
    //возведение в степень
/*    $a =2;
    $b =3;
    echo $a ** $b;*/
    // оператор ИЛИ - || либо or
    // оператор И - && либо and

    //КОнстанта
   // define('NAME_STUDENT', 'Max');
    //echo NAME_STUDENT."<br>";
   // echo "Hello".NAME_STUDENT;
    //echo __FILE__;
    //echo __LINE__;
/*    echo PHP_VERSION;
    //Отладочные функции
    $arr = ["orange", "red", "white"];
    echo "<pre>";
    print_r($arr); //значение выводит
    echo "</pre>";
    echo "<pre>";
    var_dump($arr); //выводит и значение и тип и кол-во символов
    echo "</pre>";
    $n =6;
    $n+= 1; //прибавляем к n + 1;
    echo $n;*/
    //Создать две переменные и провести все ариф операции с ними
/*    $a = 2;
    $b = 3;
    echo $a + $b."<br>";
    echo $a - $b."<br>";
    echo $a * $b."<br>";
    echo $a / $b."<br>";
    echo $a % $b."<br>";
    echo $a ** $b."<br>";*/

    //Создать переменную: $a=25, $b=70, $c=100. Построить лог цепочку проверок:
    //если а больше 26 и а<b, либо хотя бы а =25 и с =100 и b=70. Если выпол условие, то вывести сообщение ОК
/*    $a=25;
    $b=70;
    $c=100;
    if(($a>26 and $a<$b) || ($a==25 && $c==100 && $b==70)){
        echo "OK";
    }else{
        echo "NE OK";
    }*/
/*    if();
    switch ();
    for();
    while ();
    do while();*/
   // foreach(); //перебор массива
$a = [
    'color' => 'red',
    'age' => 25,
    'nickname' => 'Max'
];
/*    foreach($assoc as $item){
        echo $item."<br>";
    };*/ //перебор массива, вытаскиваем каждый элемент
/*   foreach($assoc as $k => $value){
        echo $k."<br>";
        echo $value."<br>";*/
    foreach ($a as $k => $v){
        echo "<pre>";
        echo "\$a[$k] => $v.\n";
        echo "</pre>";
    }; //перебор массива, клю + значение

?>