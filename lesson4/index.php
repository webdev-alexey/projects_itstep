<?php
//Сделать функцию, которая будет обрезать текст до

$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
/*$num = strlen($text);
var_dump($num);*/

function cut_text($text, $num_letters){
    $num = strlen($text);
    if($num > $num_letters){
        $text =substr($text,  0, $num_letters);
        //$text .="...";
    }
    return $text."...";
}
echo cut_text($text, 50);
//Если текст кириллица, num_letters задавали б в два раза больше
echo "<br>";
echo cut_text('title lorem title lorem title lorem', 20);
echo "<br>";
?>


<?php
//1. Создать функцию, которая возвращает сумму двух чисел;
function sum($num1, $num2){
    $sum=$num1+$num2;
    return $sum;
}
echo sum(1,3);
echo "<br>";
?>


<?php
//2. Создать функцию, которая выводит на экран сумму двух чисел;
function sum2($num1, $num2){
    echo $num1+$num2;
}
echo sum2(4,3);
echo "<br>";
?>
<?php
//3. Создать функцию приветствия;
function privet($helloworld){
    return $helloworld .= " privet!";
}
echo privet('Aleksey');
echo "<br>";
?>
<?php
//4. Создать функцию, которая отрисовывает таблицу умножения;
?>
<?php
//
//5. ФункциЯ, принимающая массив строк и выводЯщаЯ каждую строку в отдельном параграфе.
$array=['lemon','yandex','google'];
function func($arr){
/*    foreach ($arr as $value) {
        return $value . "<br>";
    }*/
    for($i=0; $i<count($arr); $i++)
    {?>
        <p><?=$arr[$i];?></p>
    <?php }
}
func($array);
?>