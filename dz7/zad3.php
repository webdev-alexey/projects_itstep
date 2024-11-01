<?php
    //3. сделайте счетчик обновлени¤ страницы пользователем. ƒанные храните в сессии. —крипт должен выводить на экран количество обновлений. ѕри первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновл¤ли страницу.
    header('Content-Type: text/html; charset=utf-8');
	//Инициализируем сессию:
	session_start();
    //Разрыв сессии:
    //session_destroy(); 
    if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
        echo "Вы еще не обновляли страницу!";
	} else {
		$_SESSION['counter'] = $_SESSION['counter'] + 1;
        echo "Счетчик: ".$_SESSION['counter'];
	}
    
?>
