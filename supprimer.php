<?php
$host="localhost";
$user="root";
$password="";
$db="siteweb";

$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['delete']) AND !empty($_POST['r'])){
$room = $_POST['r'];
$req = "DELETE FROM patients WHERE room='".$room."' ";
$result = mysqli_query($con,$req); 
mysqli_close($con);
header("location:patient_admin.php");
exit;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="supprimer.css">
</head>
<body>
    <form method="post" class="box">
        <input type="text" name="r" placeholder="room patient">
        <input type="submit" name="delete" value="DELETE" placeholder="DELETE">
         
    </form>
    
    
    
</body>
</html>