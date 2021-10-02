
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultat de recherche</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="styleboutton.css">
    <link rel="stylesheet" href="styletab.css">
</head>
<body>
<div>
<?php

$host="localhost";
$user="root";
$password="";
$db="siteweb";

$con=mysqli_connect($host,$user,$password,$db);

$res = mysqli_query($con,"select * from patients where patient_name ='%".$_POST['prenom']."%' order by room ");
if($res){
    echo "<h1>Résultat de votre recherche </h1>\n";
    $nbutilisateur = mysqli_num_rows($res);
    if($nbutilisateur > 0){
        echo"<table border='1'>\n";
        echo"<tr>\n";
        echo"<td><strong>Id</strong></td>\n";
        echo"<td><strong>Patient_name</strong></td>\n";
        echo"<td><strong>Age</strong></td>\n";
        echo"<td><strong>Room</strong></td>\n";
        echo"<td><strong>Health_condition</strong></td>\n";
        echo"<td><strong>Phone</strong></td>\n";
        echo"<td><strong>Email</strong></td>\n";
        echo"<td><strong>Address</strong></td>\n";
        echo"<td><strong>Code_postal</strong></td>\n";
        echo"</tr>\n";
        while($utilisateur = mysqli_fetch_array($res)){
            echo"<tr>\n";
            echo"<td>" . $utilisateur["id"] . "</td>\n";
            echo"<td>" . $utilisateur["patient_name"] . "</td>\n";
            echo"<td>" . $utilisateur["age"] . "</td>\n";
            echo"<td>" . $utilisateur["room"] . "</td>\n";
            echo"<td>" . $utilisateur["health_condition"] . "</td>\n";
            echo"<td>" . $utilisateur["phone"] . "</td>\n";
            echo"<td>" . $utilisateur["email"] . "</td>\n";
            echo"<td>" . $utilisateur["address"] . "</td>\n";
            echo"<td>" . $utilisateur["code_postal"] . "</td>\n";
            echo"</tr>\n";
        }
        echo"</table>\n";
    }
    else{
        echo"<p>Désolé, il n'y a pas de réponse correspondant à votre recherche.</p>";
    }

}else{
    echo"erreure dans l'execution de la requete</br>";
    echo"le message d'erreure est :" . mysqli_error($con);
}

?>

</div>

</body>
</html>