<?php
$host="localhost";
$user="root";
$password="";
$db="siteweb";

$con=mysqli_connect($host,$user,$password,$db);

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $password = $_POST['password'];

    if(!empty($user) && !empty($password)){
       
        $result = mysqli_query($con,"select * from admin where username='".$user."'AND password='".$password."'limit 1");

        if(mysqli_num_rows($result)==1){
            echo "you have succes";
            header("location:accueil_admin.php");
            exit();

        }
        else
        {
            $result = mysqli_query($con,"select * from user where user='".$user."'AND pass='".$password."'limit 1");
            if(mysqli_num_rows($result)==1){
                echo "you have succes";
                header("location:accueil_user.php");
                exit();
            }
                else{
            echo "le compte n'existe pas";
                }
        }
    }
    else{

        echo "veuillez completer l'ensemble des champs";
    }
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    
    <div class="center">
      <h1>Login</h1>
      <form  method="post">
        <div class="txt_field">
        <input type="text" name="user"  id="user" placeholder="Entre Username">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
        <input type="password" name="password" id="password" placeholder="Entre Password">
          <span></span>
          <label>Password</label>
        </div>
        <a class="pass" href="contact.php">Forgot Password?</a>
        <input type="submit" name="login" value="Login">
        <div class="signup_link">
          Not a member? <a href="contact.php">Signup</a>
        </div>
      </form>
    </div>


   
  

</body>
</html>