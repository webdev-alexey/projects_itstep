<?php
include 'db.php';

$query = 'SELECT * FROM user';
$result = mysqli_query($connection, $query);

if(!$result){
    die('Ошибка '. mysqli_error());
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered table-striped">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>password</td>
    </tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?= $row['id']?></td>
    <td><?php echo $row['name']?></td>
    <td><?= $row['password']?></td>
    <a href="update_post.php?post_id=<?php=$row['id'];?>">123</a>
    <td><button type="button" class="btn btn-success">Success</button></td>
    <td><button type="button" class="btn btn-danger">Success</button></td>
    </tr>
  <!--      echo 'id: ' . $row['id'].'<br>';
        echo 'Имя: ' . $row['name'].'<br>';
        echo 'Пароль: ' . $row['password'].'<br>';-->
<?php    }
?>
</table>
</body>
</html>