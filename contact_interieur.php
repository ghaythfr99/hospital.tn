<?php 
    @$err = '';
    @$destinataire = htmlspecialchars( $_GET['email']);
    @$sujet = htmlspecialchars( $_GET['nom']);
    @$message = htmlspecialchars( $_GET['message']);
    $headers = "form : ensi.projet1@gmail.com";
    if(!empty($sujet) AND !empty($message) AND !empty($headers)){
    mail($destinataire,$sujet,$message,$headers);
    $err = 'The message has been sent';
    echo $err;
    
    }
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="header.css">
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
    <section class="contact">
        <div class="content">
            
            <h2>Contact us</h2>
            <p>We would love to respond to your queries and help your succeed.<br>Feel free to get in touch with us </p>
        </div>

        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><img src="https://i.pinimg.com/736x/cb/dc/54/cbdc54feb9a9d3b062b99fd0b400ba5b.jpg" alt="Vector Location Icon, Location Icons, Location Clipart, Location Icon PNG  and Vector with Transparent Background for Free Download | Location icon,  Map logo, Map icons" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 38px; height: 38px; margin: 0px;"></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Campus Universitaire<br> de la Manouba,<br> 2010 Manouba, Tunisia</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="https://i.pinimg.com/474x/01/e2/5a/01e25aea0f80ad7649eccd6cbba3a74c.jpg" alt="Phone Icon In Solid Circle, Phone Icons, Circle Icons, In Icons PNG and  Vector with Transparent Background for Free Download | Phone icon, Address  icon, Glyph icon" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 36px; height: 36px; margin: 0px;"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>92 580 322/53949779</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><img src="https://toppng.com/uploads/preview/email-icon-vector-circle-11549825158ieiklzfl8g.png" alt="email icon vector circle PNG image with transparent background | TOPpng" jsname="HiaYvf" jsaction="load:XAeZkd;" class="n3VNCb" data-noaft="1" style="width: 38px; height: 39.663px; margin: 0px;"></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>gaythfr99@gmail.com</p>
                    </div>
                </div>
            </div>

        <div class="contactform">
            <form  method="get">
                <h2>Send Message</h2>
                <div class="inputbox">
                    <input type="text" name="nom" required="required">
                    <span>Your Gmail Account</span>
                </div>
                <div class="inputbox">
                    <input type="text" name="email" required="required">
                    <span>Your Recipient</span>
                </div>
                <div class="inputbox">
                    <textarea name="message" required="required"></textarea>
                    <span>Type your message...</span>
                </div>
                <div class="inputbox">
                    <input type="submit" name="send" value="Send">
                </div>
            </form>
        </div> 
        
    </div>
    </section>

</body>
</html>