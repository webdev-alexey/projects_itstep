<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Страница регистрации</title>
    </head>

    <body>
<?php
    require_once 'header.php';
?>

    
        <?php
if(isset($_POST["go"])):
    //Имя
	$e1=null;
	$uname=trim($_POST["uname"]);
	$uname=strip_tags($uname); // вырезаем теги
        //конвертируем специальные символы в мнемоники HTML
	$uname=htmlspecialchars($uname,ENT_QUOTES);
        /* на некоторых серверах
         * автоматически добавляются
         * обратные слеши к кавычкам, вырезаем их */
	$uname=stripslashes($uname);
	if(strlen($uname)=="0" || strlen($uname)<"3"):
		$e1.="Заполните поле 'Ваше имя'<br>";
	endif;
        
    //Фамилия
    $e2=null;
	$surname=trim($_POST["surname"]);
	$surname=strip_tags($surname);
	$surname=htmlspecialchars($surname,ENT_QUOTES);
	$surname=stripslashes($surname);
	if(strlen($surname)=="0" || strlen($surname)<"3"):
		$e2.="Заполните поле 'Ваша Фамилия'<br>";
	endif;
            
	// Получаем данные из select
    //День
    $selectday=trim($_POST["selectday"]);
	$selectday=strip_tags($selectday);
	$selectday=htmlspecialchars($selectday,ENT_QUOTES);
	$selectday=stripslashes($selectday);
    //Месяц
	$selectmonth=trim($_POST["selectmonth"]);
	$selectmonth=strip_tags($selectmonth);
	$selectmonth=htmlspecialchars($selectmonth,ENT_QUOTES);
	$selectmonth=stripslashes($selectmonth);
    //Год
    $selectyear=trim($_POST["selectyear"]);
	$selectyear=strip_tags($selectyear);
	$selectyear=htmlspecialchars($selectyear,ENT_QUOTES);
	$selectyear=stripslashes($selectyear);
      
    //Получаем данные от radio кнопки
	if(!empty($_POST["radio"])){$radio=trim($_POST["radio"]);}
    
    //Логин
    $e3=null;
	$login=trim($_POST["login"]);
	$login=strip_tags($login);
	$login=htmlspecialchars($login,ENT_QUOTES);
	$login=stripslashes($login);
	if(strlen($login)=="0" || strlen($login)<"3"):
		$e3.="Заполните поле 'Логин'<br>";
	endif;
    
    //Пароль !!! НЕ РАБОТАЕТ
/*    $e4=null;
	$password=trim($_POST["password"]);
	$password=strip_tags($password);
	$password=htmlspecialchars($password,ENT_QUOTES);
	$password=stripslashes($password);
	if(strlen($password)=="0" || strlen($password)<"6"):
		$e4.="Заполните поле 'Пароль'<br>";
	endif;*/

	
    //Доп безопасность ввести число 24*2 =48 при умножении
	$e5=null;
	$umath=trim($_POST["umath"]);
	$umath=strip_tags($umath);
	$umath=htmlspecialchars($umath,ENT_QUOTES);
	$umath=stripslashes($umath);
	if($umath!="48"):
		$e5.="Неверный результат<br>";
	endif;
	
	$eEn=$e1.$e2.$e3.$e4.$e5;
	
	if($eEn==null):
		// выводим уведомление об успехе операции и перезагружаем страничку
		print "<script language='Javascript' type='text/javascript'>
		alert ('Ваше сообщение отправлено! Спасибо!');
		function reload(){location = 'index.php'}; 
		setTimeout('reload()', 0);
		</script>";
/*        echo $uname."<br>";
        echo $surname."<br>";
        echo $selectday."<br>";
        echo $selectmonth."<br>";
        echo $selectyear."<br>";
        echo $radio."<br>";
        echo $login."<br>";
        echo $password."<br>"; //НЕ РАБОТАЕТ, не ПЕРЕДАЕТ
        echo $umath."<br>";*/

	endif;
endif;
?>
            <!--Секция регистрация-->
            <section class="registration">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="reg.php" method="post">
                                <br>Ваше Имя:<br>
                                <input type="text" name="uname" value="<?=@$uname;?>" class="vvod">
                                <br>
                                <span class="error"><?=@$e1;?></span>
                                
                                <br>Ваша Фамилия:<br>
                                <input type="text" name="surname" value="<?=@$surname;?>" class="vvod">
                                <br>
                                <span class="error"><?=@$e2;?></span>
                                
                                <br>Дата рождения:<br>
                                <select name="selectday" class="vvod">
                                    <option value="1" <?php @$selectday=="1" ? print "selected" : false;?>>1</option>
                                    <option value="2" <?php @$selectday=="2" ? print "selected" : false;?>>2</option>
                                    <option value="3" <?php @$selectday=="3" ? print "selected" : false;?>>3</option>
                                </select>
                                <select name="selectmonth" class="vvod">
                                    <option value="январь" <?php @$selectmonth=="январь" ? print "selected" : false;?>>январь</option>
                                    <option value="февраль" <?php @$selectmonth=="февраль" ? print "selected" : false;?>>февраль</option>
                                    <option value="март" <?php @$selectmonth=="март" ? print "selected" : false;?>>март</option>
                                </select>
                                <select name="selectyear" class="vvod">
                                    <option value="1994" <?php @$selectyear=="1994" ? print "selected" : false;?>>1994</option>
                                    <option value="1995" <?php @$selectyear=="1995" ? print "selected" : false;?>>1995</option>
                                    <option value="1996" <?php @$selectyear=="1996" ? print "selected" : false;?>>1996</option>
                                </select>
                                <br>
                                <br> Пол:<br>
                                <input type="radio" name="radio" value='муж' <?php @$radio=="муж" ? print "checked" : false;?>>муж<br>
                                <input type="radio" name="radio" value='жен' <?php @$radio=="жен" ? print "checked" : false;?>>жен<br>
                                
                                
                                <br>Ваш Логин:<br>
                                <input type="text" name="login" value="<?=@$login;?>" class="vvod">
                                <br>
                                <span class="error"><?=@$e3;?></span>
                                
                                <br>Ваш Пароль:<br>
                                <input type="password" name="password" value="<?=@$password;?>" class="vvod">
                                <br>
                                <span class="error"><?=@$e4;?></span>
                                
                                <br> Введите результат 24*2=?:<br>
                                <input type="text" name="umath" value="<?=@$umath;?>" class="vvod">
                                <br>
                                <span class="error"><?=@$e5;?></span>
                                <input type="hidden" name="go" value="5"><br>
                                <button type="submit">Зарегистрироваться</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </body>

    </html>



    <?php
    require_once 'footer.php';
?>
