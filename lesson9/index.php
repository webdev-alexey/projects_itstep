<?php
    $test = fopen('name.txt', 'r');
    while(!feof($test)){
        echo fgets($test).":";
    }
?>