<?php
/*Задача 1.
В класс User добавить магические методы __get, __set для закрытых свойств, которые будут
возвращать / присваивать соответствующие значения*/


class A
{
    private $bar = 1;

    public function __get($name)
    {
        echo "You tried to get {$name}";
    }

}

$a = new A;
echo $a->bar; // ошибка
echo $a->foo; // нет такого свойства
?>
