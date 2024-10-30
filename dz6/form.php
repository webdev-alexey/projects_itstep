<meta charset="UTF-8">
<?php
//Логин
$login=trim($_POST["login"]);
$login=strip_tags($login);
$login=htmlspecialchars($login,ENT_QUOTES);
$login=stripslashes($login);
//E-mail
$email=trim($_POST["email"]);
$email=strip_tags($email);
$email=htmlspecialchars($email,ENT_QUOTES);
$email=stripslashes($email);
//Пароль
$password=trim($_POST["password"]);
$password=strip_tags($password);
$password=htmlspecialchars($password,ENT_QUOTES);
$password=stripslashes($password);


if((strlen($login)=="0" || strlen($login)<"3" || strlen($login)>"30") || (strlen($password)=="0" || strlen($password)<"6") || (!filter_var($email, FILTER_VALIDATE_EMAIL))):
    print "<script language='Javascript' type='text/javascript'>
		alert ('Заполните поле логин или пароль или email');
		function reload(){location = 'index.html'}; 
		setTimeout('reload()', 0);
		</script>";
elseif ($fp = fopen("users.txt", "a")):
    $mylogin = $login." : "; // Исходная строка логина
    $myemail = $email." : "; //Исходная строка email
    $mypassword = $password.PHP_EOL; // Исходная строка пароля
    if (strpos(file_get_contents("users.txt"), "$mylogin"))
        print "<script language='Javascript' type='text/javascript'>
		alert ('Ошибка при записи в файл.');
		function reload(){location = 'index.html'}; 
		setTimeout('reload()', 0);
		</script>";
    elseif (($test = fwrite($fp, $mylogin)) && ($test = fwrite($fp, $myemail)) && (($test = fwrite($fp, $mypassword)))) // Запись в файл
        print "<script language='Javascript' type='text/javascript'>
		alert ('Данные в файл успешно занесены.');
		function reload(){location = 'index.html'}; 
		setTimeout('reload()', 0);
		</script>";
    fclose($fp); //Закрытие файла
    
endif;

?>


