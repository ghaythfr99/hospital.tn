<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width , initial-scale=1.0">
        <title>Home Admin</title>
        <link rel="stylesheet" href="page_principale.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
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
        <div class="text-box">
            <h1>COVID-19</h1>
            <p>Follow Us . Stay Safe</p>
            <a href="" class="hero-btn">Visit Us To Know More</a>    

        </div>
        </section> <section class="protocole">
            <h1>public measures</h1>
            <p>health care protocole for COVID-19</p>
            <div class="row">
                <div class="prot-col">
                    <h3>protocole1</h3>
                    <p>Wear cloth face coverings, at a minimum, at all times when around coworkers or the general public. If a respirator, such as an N95 respirator or better, is needed for conducting work activities, then that respirator should be used, and the worker should use their cloth face covering when they are not using the respirator (such as during breaks or while commuting).</p>
                </div>
                <div class="prot-col">
                    <h3>protocole2</h3>
                    <p>Frequently wash your hands with soap and water for at least 20 seconds. When soap and running water are not immediately available, use an alcohol-based hand sanitizer with at least 60% ethanol or 70% isopropanol as active ingredients and rub hands together until they are dry. Always wash hands that are visibly soiled.</p>
                </div>
                <div class="prot-col">
                    <h3>protocole3</h3>
                    <p>Avoid touching your eyes, nose, or mouth with unwashed hands.</p>
                </div>

            </div>
            <div class="row">
                <div class="prot-col">
                    <h3>protocole4</h3>
                    <p>Practice good respiratory etiquette, including covering coughs and sneezes or coughing/sneezing into your elbow/upper sleeve.</p>
                </div>
                <div class="prot-col">
                    <h3>protocole5</h3>
                    <p>Avoid close contact (within 6 feet for a total of 15 minutes or more over a 24-hour period) with people who are visibly sick and practice physical distancing with coworkers and the public.</p>
                </div>
                <div class="prot-col">
                    <h3>protocole6</h3>
                    <p>Stay home if sick.</p>
                </div>

            </div>

        </section>
        <section class="video">
            
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xVu_I6WCsto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
        </section>
        <section class="footer">
            <h4>About Us</h4>
            <p>follow us for more health care advice and udpates on the current health situation</p>
            <div class="icons">

                <a href=""><img src="https://image.flaticon.com/icons/png/512/20/20673.png" width="20" height="20" alt="Facebook circular logo  free icon" title="Facebook circular logo free icon" data-icon_src="https://www.flaticon.com/svg/vstatic/svg/20/20673.svg?token=exp=1628108559~hmac=ff8690b53a084ee6bd29b70e3b48feca"></a>
                <a href=""><img src="https://image.flaticon.com/icons/png/512/87/87390.png" width="20" height="20" alt="logo instagram  Icône gratuit" title="logo instagram Icône gratuit" data-icon_src="https://www.flaticon.com/svg/vstatic/svg/87/87390.svg?token=exp=1628109191~hmac=889dcc2a998080b0a2bfcf595fddc886"></a>
                <a href=""><img width="20" height="20" src="https://image.flaticon.com/icons/png/512/1384/1384017.png" alt="twitter Icône gratuit" title="twitter Icône gratuit" class="loaded"></a>
                <a href=""><img width="20" height="20" src="https://image.flaticon.com/icons/png/512/1384/1384014.png" alt="linkedin Icône gratuit" title="linkedin Icône gratuit" class="loaded"></a>
            </div>
        </section>
    <script>
        var navlinks = document.getElementById("nav-links");
        function showMenu(){
            navlinks.style.right ="0";
        }
        function hideMenu(){
            navlinks.style.right ="-200px";
        }
    </script>    
    </body>
</html>