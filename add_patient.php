<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>add_patient Form</title>
	<link rel="stylesheet" href="registration.css">
   <link rel="stylesheet" href="header.css">
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

<div class="wrapper">
    <div class="title">
    add_patient Form
    </div>
    <form action="add.php" method="post">
    <div class="form" >
       <div class="inputfield">
          <label>Patient_Name</label>
          <input type="text" name="patient_name" class="input">
       </div>  
        
       <div class="inputfield">
          <label>Age</label>
          <input type="text" name="age" class="input">
       </div>  
      <div class="inputfield">
          <label>Room</label>
          <input type="text" name="room" class="input">
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
       <div class="inputfield">
          <label>Health_condition</label>
          <textarea class="textarea" name="health_condition"></textarea>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" name="email" class="input">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" name="phone" class="input">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" name="code_postal" class="input">
       </div> 
     
      <div class="inputfield">
        <input type="submit" name="Register" value="Register" class="btn">
      </div>
    </div>
    </form>
</div>	
	
</body>
</html>