<br>
<br>
<div class="row">
    <div class="col-sm-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_password">user_password</label>
                <input type="text" name="user_password" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_firstname">user_firstname</label>
                <input type="text" name="user_firstname" class="form-control">
            </div>             
            <div class="form-group">
                <label for="user_lastname">user_lastname</label>
                <input type="text" name="user_lastname" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_email">user_email</label>
                <input type="text" name="user_email" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_image">user_image</label>
                <input type="text" name="user_image" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_role">user_role</label>
                <input type="text" name="user_role" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="insert" class="btn btn-primary" value="Зарегистрироваться">
            </div>
        </form>
        <hr>
    </div>
</div>
<?php
include "includes/db.php"; 
include "includes/header.php"; 
include "includes/navigation.php";
if(isset($_POST['insert'])){

    $username =$_POST['username'];
    $user_password =$_POST['user_password'];
    $user_firstname =$_POST['user_firstname'];
    $user_lastname =$_POST['user_lastname'];
    $user_email =$_POST['user_email'];
    
/*    $sql = "INSERT INTO users(username,user_password,user_firstname,user_lastname,user_email,user_image,user_role) VALUES ('$username', '$user_password', '$user_firstname', '$user_lastname' '$user_email', '1', '1')"; */   
    $sql = "INSERT INTO users(username,user_password, user_firstname,user_lastname,user_email,user_image,user_role,randSalt) VALUES ('$username', '$user_password', '$user_firstname', '$user_lastname','$user_email','1','1','$2y$10')";
    
    $result = mysqli_query($connection, $sql);
    if(!$result) {
        die('Ошибка' . mysqli_error());
    
    }
}


?>


