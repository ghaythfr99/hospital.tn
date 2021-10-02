<?php 
session_reset();
$host="localhost";
$user="root";
$password="";
$db="siteweb";

$con=mysqli_connect($host,$user,$password,$db);

$pn = $_POST['patient_name'];
$g = $_POST['age'];
$r = $_POST['room'];
$h = $_POST['health_condition'];
$pho = $_POST['phone'];
$em = $_POST['email'];
$add = $_POST['address'];
$co = $_POST['code_postal'];

if(!empty($pn) AND !empty($g) AND !empty($r) AND !empty($h) AND !empty($pho) AND !empty($em) AND !empty($add) AND !empty($co) ){
    if(is_numeric($g) AND is_numeric($r) AND is_numeric($pho) AND is_numeric($co) AND ($g >0) AND ($r >0) AND ($g <150) AND ($r <250) ){
    $req = "INSERT INTO patients VALUES('','$pn','$g','$r', '$h','$pho','$em','$add','$co')";

    mysqli_query($con,$req);
    mysqli_close($con);
    header("location:patient_admin.php");
    exit;}
    else{
        echo "erreur de donnees";
        
    }

}
else{
    echo "veuillez completer l'ensemble des champs";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="supprimer.css">
</head>
<body>
     
    
</body>
</html>
