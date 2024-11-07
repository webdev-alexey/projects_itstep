<?php
include 'db.php';

if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $password =$_POST['password'];
    
    $query = "INSERT INTO user(name,password) VALUES ('$name', '$password')";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Ошибка' . mysqli_error());
    
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form create</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="" method="POST">
                   <div class="form-control">
                        <label for="name">Name</label>
                        <input type="text" name="name">
                        <br>
                        <label for="name">Password</label>
                        <input type="text" name="password">
                   </div>
                    <input type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>