<?php

// Цикл while

$a = 1;
$b = 2;
  while ($a < 10) {
    echo $b ."<br>";
    $b *= 2;
    $a++;
}
echo "<br>";

// Счетчик
$counter = 0;
while($counter <= 10 ){

    echo $counter;
    $counter++;

}
echo "<br>";

// Досрочный выход
  $last = 10;
  while (true) {
    echo $last;
    if ($last == 10) {
      break;
    }

    $last++;
  }
echo "<br>";

// Цикл for
  for  ($i  =  0, $k  = "Points";  $i  <  100;  $i++)  
    $k =  $k . ".";
    echo  $k;

echo "<br>";

// Switch
$number = 100;

switch($number){

    case 34:
    echo "it is 34";
    break;
    case 37:
    echo "is it 37";
    break;
    case 35:
    echo "is it 35";
     break;
    case 24:
    echo "is it 24";
    break;
    
    default : 
     echo "we could not find anything";
    break;
}

echo "<br>";
// Цикл foreach
$menu = array(
  'main' => 'main.php',
  'about' => 'about.php',
  'info' => 'info.php',
  'contacts' => 'contacts.php',
);

echo "<ul>";
foreach ($menu as $key => $value) {
  echo "<li><a href=". $value . ">". $key ."</a></li>";
}
echo "</ul>";


// таблица умножения
$a = 3;
$b = 3;

echo "<table border=\"1px\"><tbody >";
for($i = 1; $a >= $i; $i++) {
    echo "<tr>";
    for ($j = 0, $l = 0; $b > $l; $l++, $j+=$i){
        echo "<td width=\"150px\" align=\"center\" bgcolor=\"pink\">".($i+$j)."</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";

// Switch
$numbers = array(1,2,3,4,5);
$my_act = "+";
$arr_len = count($numbers);

    $result = $numbers[0];
    switch($my_act){
    case "+":
      for($i = 1; $i < $arr_len; $i++){
            $result += $numbers[$i];
            // var_dump($result);
          }
          break;
      case "*":
        for($i = 1; $i < $arr_len; $i++){
                $result *= $numbers[$i];
          }
          break;
      case "-":
        for($i = 1; $i < $arr_len; $i++){
                $result -= $numbers[$i];
          }
          break;
      case "/":
        for($i = 1; $i < $arr_len; $i++){
                $result /= $numbers[$i];
          }
          break;
      case "%":
          for($i = 1; $i < $arr_len; $i++) {
                $result %= $numbers[$i];
            }
          break;
      default:
      echo "Ошибочка вышла!";
  }
    echo $result;

echo "<br>";

// Список годов
echo "<select>";
  for ($i = 2000; $i <= 2050; $i++) { 
    echo "<option>" .$i. "</option>";
  }
echo "</select>";