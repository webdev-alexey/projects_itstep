<?php 
    header('Content-Type: text/html; charset=utf-8'); 
    //5. запишите в сессию врем¤ захода пользовател¤ на сайт. ѕри обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
    //Инициализируем сессию:
    session_start(); 
    //Разрыв сессии:
    //session_destroy(); 

    if (!isset($_SESSION["count"])){
        $_SESSION["count"] = date("H:i:s");
        echo "Вы еще не были здесь, пошел отсчет!";
    }else {
        //Отсчет времени:
        $time = time() - strtotime($_SESSION["count"]); 
        echo "Вы уже на сайте: ". $time ." секунд"."<br>";
        //Перевод в часы, минуты, секунды:
        //Пробовал делать через date(выводит как-то некорректно и год echo date('l jS \of F Y h:i:s', $time);)
        $hour = floor($time/3600);
        $sec = $time - ($hour*3600);
        $min = floor($sec/60);
        $sec = $sec - ($min*60);
        echo "Вы уже на сайте: ".$hour.":".$min.":".$sec."<br>";
    }
?>
