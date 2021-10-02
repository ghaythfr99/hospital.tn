<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient</title>
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
               <li><a href="accueil_user.php">HOME</a></li>
                   <li><a href="course-user.html">COURSE</a></li>
                   <li><a href="q&a_user.html">Q&A</a></li>
                   <li><a href="patient_user.php">PATIANTS</a></li>
                   <li><a href="contact_interieur.php">Contact</a></li>
                   <li><a href="deconnexion.php">DISCONNECT</a></li>
               </ul>
           </div>
           <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
</section>
<div class="droite">
    
    <a class="boutton" href=""><strong>search</strong></a>

</div>

<?php
$host="localhost";
$user="root";
$password="";
$db="siteweb";
$con=mysqli_connect($host,$user,$password,$db);
$res = mysqli_query($con,"select * from patients");
?>
<table class="tableau" width="820" >
    <thead>
    <tr >
        <td>Id</td>
        <td>Patient_name</td>
        <td>Age</td>
        <td>Room</td>
        <td>Health_condition</td>
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
        <td><?php echo $ligne['patient_name']; ?></td>
        <td><?php echo $ligne['age']; ?></td>
        <td><?php echo $ligne['room']; ?></td>
        <td><?php echo $ligne['health_condition']; ?></td>
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