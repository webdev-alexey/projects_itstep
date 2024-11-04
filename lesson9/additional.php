<?php
// Дополнительные функции для работы с файлами
$path = 'OpenServer/domains/lesson8/task_01.php';

// Выделяет имя файла из полного пути 
// basename($path, $suffix) // $path - путь, $suffix - окончание файла.
echo basename($path); // выводит task_01.php
echo "<br>";
//echo basename($path, '.php'); // выводит task_01
echo "<br>";
// возвращает имя каталога выделенное из $path
// dirname($path, $levels) // $levels php 7
//echo dirname($path); // OpenServer/domains/lesson8
echo "<br>";
// Преобразовывает отностительный путь в абсолютный т.е. начинающий с корня
// realpath($path) // $path - путь
//echo realpath('.');
echo "<br>";

// Работа с файловой системой: 
// copy($src, $dst, $context) - копирует файл с именем $src в файл с именем $dst.
// rename($oldname, $newname) - переименовывает  (или перемещает)  файл с именем $oldname в файл $newname;
// unlink($filename) - удаляет файл с именем $filename


// copy('task_01.php', 'test.php');
// rename('task_01.php', 'test_01.php');
// unlink('test.php');

// Функции для работы с директориями.
// mkdir(), rmdir(), chdir(), getcwd()
// mkdir($name, $perms, $recursive) - создает каталог с именем $name с правами $perms, если $recursive парамметр указан true, то при вызове создаст все необходимые пути
// rmdir($name) - удаляет каталог с именем $name
// chdir($path) - сменяет текущий каталог на указанный $path
// getcwd() - возвращает полный путь к текущему каталогу
// mkdir('uploads', 0777, true); // 0 - указывает на то, что то восьмиричная константа
// rmdir('uploads'); // true or false
// chdir('./uploads');
// getcwd() 
// echo getcwd();
echo "<br>";
$pathDir = '/OpenServer/domains/lesson8/';
// Получение списка файлов директории scandir()
 print_r(scandir($pathDir));

// Чтение директории: dir(), closedir(), readdir()
// opendir($path) - открывает каталог $path для дальнейшей работы в нем
// readdir($handle) - считывает имя файла или подкаталога открытого ранее с идентификатором $handle и возвращает его в виде строки
// closedir($handle) - закрывает ранее открытый каталог

// $curdir = opendir($pathDir);
// while($e = readdir($curdir)) {
//   echo $e . "<br>";
// }

// glob($pattern) - функция возвращает список всех путей совпадающий с шаблоном $pattern
//$array = glob('/OpenServer/domains/lesson8/*/*.php');
//print_r($array);













