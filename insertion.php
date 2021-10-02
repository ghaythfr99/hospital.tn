<?php 
$host="localhost";
$user="root";
$password="";
$db="siteweb";

$con=mysqli_connect($host,$user,$password,$db);
$n = $_POST['username'];
$p = $_POST['password'];
$ph = $_POST['phone'];
$e = $_POST['email'];
$ad = $_POST['address'];
$c = $_POST['code_postal'];
$req = "INSERT INTO user VALUES('','$n','$p','$ph','$e','$ad','$c')";

 mysqli_query($con,$req);
 mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styletab.css">
    <link rel="stylesheet" href="styleboutton.css">
</head>
<body>
<section class="header">
        <nav>
           <a href="page_principale.php"><img src="images/logo.png"></a>
           <div class="nav-links" id="nav-links">
            <i class="fa fa-times" onclick="hideMenu()"></i>
               <ul>
               <li><a href="accueil_admin.php">HOME</a></li>
                <li><a href="course.html">COURSE</a></li>
                   <li><a href="q&a.html">Q&A</a></li>
                   <li><a href="patient_admin.php">PATIANTS</a></li>
                   <li><a href="registration.php">CREATE ACCOUNT</a></li>
                   <li><a href="deconnexion.php">DISCONNECT</a></li>
               </ul>
           </div>
           <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
</section>

<?php
$host="localhost";
$user="root";
$password="";
$db="siteweb";
$con=mysqli_connect($host,$user,$password,$db);
$res = mysqli_query($con,"select * from user");
?>
<table class="tableau" width="820" >
    <thead>
    <tr >
        <td>Id</td>
        <td>Username</td>
        <td>Password</td>
        <td>Phone</td>
        <td>Email</td>
        <td>Address</td>
        <td>Code_postal</td>
    </tr>
    </thead>
    <?php while($ligne = mysqli_fetch_array($res)) { ?>
    <tbody>
    <tr>
        <td><?php echo $ligne['id']; ?></td>
        <td><?php echo $ligne['user']; ?></td>
        <td><?php echo $ligne['pass']; ?></td>
        <td><?php echo $ligne['phone']; ?></td>
        <td><?php echo $ligne['email']; ?></td>
        <td><?php echo $ligne['address']; ?></td>
        <td><?php echo $ligne['code_postal']; ?></td>
    </tr>
    </tbody>
    <?php } ?>
</table>
    
</body>
</html>