<?php
    $filename = $_FILES['files']['type'];
    echo $filename."<br>";
    $filename = time(). '-'.$_FILES['files']['name'];
    echo $filename."<br>";
    $filename = date("d.m.y h.i.s"). '-'.$_FILES['files']['name'];
    echo $filename."<br>";
   
    echo "<pre>";
    var_dump($_FILES['files']); // передаем имя (name) инпута
    echo "</pre>";
    $file = $_FILES['files'];
    $filetmp = $_FILES['files']['tmp_name'];
    $dir = 'uploads';
    if(!file_exists($dir)){
        mkdir($dir, 0777);
    }
    $file_name = $dir.'/'.$file['name'];
    move_uploaded_file($filetmp, $file_name);
print("Загружен " .$file['name'] . "и размер " . $file['size'] . " байт");
?>