<?php
    $connection = new PDO ("mysql:host=localhost; dbname=cms", 'root', '');
    if(!connection){
        echo "Ошибка";
    }else{
        echo "Все ок"."<br>";
    }
    $query = $connection -> query('SELECT * FROM users');
    $result = $query -> FETCHALL(PDO::FETCH_ASSOC);
    var_dump ($result);
?>