<?php
/*Задача 6*.
Создать класс со статическим свойством, которое будет содержать значение количества созданных экземпляров (использовать self)*/

class ekzemplyr{
    static public $count;
    public function __construct(){
        self::$count++;
    }
}
$a = new ekzemplyr;
$b = new ekzemplyr;
$c = new ekzemplyr;

echo ekzemplyr::$count; // обращение к статическому свойству