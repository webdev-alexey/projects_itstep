<!--Вывод навигации
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul class="nav">
        <php
/*        $nav = 4; //кол-во меню
        $cur_page = 1; //первая страница
        while ($cur_page <= $nav) {
            echo "<li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"?page=$cur_page\">Link</a></li>";
            $cur_page++;
        }


        */?>
    </ul>
</body>

</html>
//пример вывода поинтс с 100 точками через цикл фор
for($i=0, $k="Points"; $i<100; $i++)
$k=$k.".";
echo $k .'<br>';
//1. Необходимо создать выпадающий список годов от 2000 до 2050.
-->
<select>
    <?php
    for($i=2000; $i<2050; $i++):?>
    <option>
        <?=$i;?>
    </option>
    <?php endfor;?>
    }
</select>
<br>

<?php
//2.Отрисовать таблицу умножения.
/*for ($i=0;$i<=10;$i++) {
    for ($j=0;$j<=10;$j++) {
        echo $i.'*'.$j.'='.($i*$j).'<br>';
    }
}*/
?>
<table>
<?php
    for($i=1; $i<10; $i++):?>
    <tr></tr>
        <?php
        for($j=1; $j<10; $j++): ?>
            <td><?=$i*$j;?></td>
            <?php endfor;?>
    <?php endfor;?>
</table>


<?php
    $posts = [
            0=>[
                    'title' => 'list-based media',
                    'author' => 'Author1',
                    'description' => 'cras...........'
            ],
            1=>[
                    'title' => 'list-based media2',
                    'author' => 'Author2',
                    'description' => 'cras2...........'
            ],
            2=>[
                    'title' => 'list-based media3',
                    'author' => 'Author3',
                    'description' => 'cras3...........'
            ],
    ];
    ?>
    //var_dump($posts);
    <?php foreach ($posts as $value): ?>
        <li class="media">

            <p><?=$value['author'];?></p>
                <div class="media-body">
                    <h5><?=$value['title'];?></h5>
                    <!--<p><?/*=date(format 'Y-m-d'):*/?></p>-->
                    <p><?=$value['description'];?></p>
                </div>
        </li>
<?php endforeach;?>
