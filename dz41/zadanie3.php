<?php
/*Задача 3.
Создать класс от которого нельзя унаследоваться.*/


final class A
{
    public $x = 5;

    final public function test(){
        echo 1;
    }
}

class B extends A {}
