<meta charset="UTF-8">
<?php
echo "Задание 1. Создать переменную с произвольным текстом (длиной >10символов). Провести проверку: если длина
строки больше 10 символов, обрезать строку до 10 символов. С помощью функции заменить все символы
\"a-g\" на пустоту.";
echo "<br>";
$text = "Larem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
//Вторая часть (замена символов a-g)
$bukvi = array("a", "b", "c", "d", "e", "f", "g");
$probel = array("", "", "", "", "", "", "");
$textbez = str_replace($bukvi, $probel, $text);
//Первая часть (обрезание)
function cut_text($textbez, $num_letters){
    $num = strlen($textbez);
    if($num > $num_letters){
        $textbez =substr($textbez,  0, $num_letters);
    }
    return $textbez."...";
}
echo cut_text($textbez, 10);
echo "<br>";
?>
<?php
/*Задание 2:
Взять Html разметку:
" <div class="refnamediv">
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
<span class="dc-title">Любой текст</span></p>
</div>";
Удалить все html теги. Вывести количество символом после фильтрации.*/
echo "Задание 2: Взять Html разметку:";
echo "<br>";
$beztegov= '<div class="refnamediv">
    <h1>htmlspecialchars</h1>
    <p> (PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">htmlspecialchars</span> —
        <span class="dc-title">Любой текст</span></p>
</div>';
//echo strip_tags($beztegov);
$strLength = iconv_strlen(strip_tags($beztegov));
echo $strLength;
echo "<br>";
?>

<?php
echo "Задание 3: Найти и заменить в строке \"http://example.com/user/username\" user на author; Вывести результат на экран";
echo "<br>";
$zamena = str_replace("/user/", "/author/", "http://example.com/user/username");
echo $zamena;
echo "<br>";
?>

<?php
echo "Задание 4: Отсортировать массив [1,22,45,3,23,45,6,76,55,4] по возврстанию";
echo "<br>";
$arr = array('1','22','45','3','23','45','6','76','55', '4');
sort($arr);
print_r ($arr);
echo "<br>";
?>
<?php
echo "Задание 5: Преобразовать строку \"Find me and say Hello Mike!\" в массив";
echo "<br>";
$stroka = "Find me and say Hello Mike!";
$preobrazovannayastrokavmassiv = explode(" ", $stroka);;
print_r($preobrazovannayastrokavmassiv);
echo "<br>";
?>
<?php
echo "Задание 6: Посчитать, сколько букв \"a\" встречается в строке \"Find me and say Hello Mike!\"";
echo "<br>";
$stroka2 = "Find me and say Hello Mike!";
echo substr_count($stroka2, 'a');
echo "<br>";
?>
<?php
echo "Задание 7: Дан урл \"http://example.com/name=Mike&lastname=Jackson&age=25\", необходимо разбить и вытащить параметры и вывести на экран.";
echo "<br>";
//!ВОПРОС ВОЗНИК С ДАННЫМ ЗАДАНИЕМ, если полную ссылку указать, то name никак не parse_str, пришлось обрезать
$url = "name=Mike&lastname=Jackson&age=25";
parse_str($url, $output);
echo $output['name'];
echo "<br>";
echo $output['lastname'];
echo "<br>";
echo $output['age'];
echo "<br>";
?>