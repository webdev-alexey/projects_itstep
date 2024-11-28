<?php
/*Задача 2.
Создать интерфейс для класса User. Реализовать интерфейс с классом User*/

interface User
{
	public function name();
}

class AUser implements User
{
    public function name()
    {
        echo 'Aleks';
    }
}
?>
