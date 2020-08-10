<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ceg Motorsports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 <style type="text/css">
  * {
  box-sizing: border-box;
}



.rows .columns h3 {
  text-align: center;
}

.rows {
  margin: 8px -16px;
  
}

/* Add padding BETWEEN each column */
.rows,
.rows > .columns {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.columns {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.rows:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.contents {
  background-color:#E6E6FA;
  padding: 10px;
}

.button {
  background-color: #ec2139;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .columns {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <img src="images/example.png" style="width: 50px; height: 50px;"> &nbsp;&nbsp;
  <a class="navbar-brand" href="#">CEG MOTORSPORTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html"><font color="white">HOME</a></font>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><font color="white">ABOUT</a></font>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"><font color="white">GALLERY</a></font>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="team.php"><font color="white">TEAM</a></font>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><font color="white">CONTACT</a></font>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="project.php"><font color="white">PROJECTS</a></font>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="panel.php"><font color="white">ADMIN PANEL</a></font>
      </li>  
    </ul>
  </div>  
</nav>
<br>

<center>
<h2><b>PROJECTS</b></h2>
<hr style="width:50%;text-align:center;margin-left:0;">
</center>


<!-- Portfolio Gallery Grid -->
<div class="rows">
  <div class="columns">
    <div class="contents">
      <img src="images/13.jpg" alt="" style="width:100%">
      <h3>DESIGN OF TANDEM MASTER CYCLINDER</h3>
      <p>To design a tandem master cylinder with optimum bore diameters for better and instantaneous locking of wheels. This design is made to have a better performance with minimum efforts of the driver.</p>
      <p><b>Members</b></p>
      <p>1.BALASHANMUGAM R</p>
      
    </div>
  </div>
  <div class="columns">
    <div class="contents">
    <img src="images/14.jpg" alt="" style="width:100%">
      <h3>DESIGN AND ANALYSIS OF BRAKE DISC</h3>
      <p>To design a brake disc with maximum surface of contact and minimum weight. And anlyse them to get the maximum stress value and thermal conductivity based on the material choosen.</p>
      <p><b>Members</b></p>
      <p>1.HARISUDHAN A.C</p>
      <p>2.MUKESH V</p>
    </div>
  </div>
  <div class="columns">
    <div class="contents">
    <img src="images/15.jpg" alt="" style="width:100%">
      <h3>DESIGN AND ANALYSIS OF ATV ROLLCAGE</h3>
      <p>To design a rollcage structure with SAE India guideline and to optimize it to the maximum structural rigidy with minimum weight.</p>
      <p><b>Members</b></p>
      <p>1.RAJADURAI B</p>
      <p>2.KRITHICK RAJ M</p>
    </div>
  </div>
  <div class="columns">
    <div class="contents">
    <img src="images/16.jpg" alt="" style="width:100%">
      <h3>OPTIMISATION OF DRIVER ERGONOMICS</h3>
      <p>To study and optimize driver's sitting posture, pedal placements , safety gears postioning</p>
      <p><b>Members</b></p>
      <p>1.SAIRISHI V</p>
      <p>2.BHUVANESHWARAN P</p>
    </div>
  </div>
<!-- END GRID -->
</div>
<div class="rows">
  
    <div class="columns">
    <div class="contents">
    <img src="images/17.jpg" alt="" style="width:100%">
      <h3>DESIGN AND ANALYSIS OF SUSPENSION SYSTEM FOR ATV</h3>
      <p>To design and analyse the suspension geometry and its parameters using multibody dynamics simulation softwares. </p>
      <p><b>Members</b></p>
      <p>1.ARUN M</p>
      <p>2.HARIHARAN V</p>
      <p>3.NUTHANPRASAD S</p>
      <p>4.APARNA S</p>
    </div>
  </div>
  
    <div class="columns">
    <div class="contents">
    <img src="images/18.jpg" alt="Mountains" style="width:100%">
      <h3>WORKING, TUNING AND TYPES OF SHOCK ABSORBER</h3>
      <p>To study the mechanism behind how different shock absorbers works and methods to optimise its process.</p>
      <p><b>Members</b></p>
      <p>1.KRISHNAKUMAR N</p>
      <p>2.SRINATH B R</p>
      <p>3.EASHWAR K P</p>
      <p>4.KAMALANATHAN T</p>
    </div>
  </div>
  <div class="columns">
    <div class="contents">
    <img src="images/19.jpg" alt="" style="width:100%">
      <h3>SUPER FINE TUNING AND OPTIMIZATION OF GAGED GX9 CVT </h3>
      <p>To make the CVT to Engage, Disengage, shfitout under desired RPM and to improve overall performance of CVT</p>
      <p><b>Members</b></p>
      <p>1.SHYAM PRASATH S E</p>
      <p>2.HARIHARASUBRAMANIAM L</p>
      <p>3.CHARAN KUMAR</p>
    </div>
  </div>
   <div class="columns">
    <div class="contents">
    <img src="images/20.jpg" alt="" style="width:100%">
      <h3>DESIGN, SIMULATION AND OPTIMIZATION OF 4WD</h3>
      <p>To design a Part-time 4WD for a BAJA ATV and Maximize  Performance at different terrain conditions</p>
      <p><b>Members</b></p>
      <p>1.DHARUN NIVESH P</p>
      <p>2.GOKULAKRISHNAN P</p>
      <p>3.FRANCIS JACOB K</p>
    </div>
  </div>
  
</div>
 <div class="footer">
    <hr>
     <h3> CONTACT </h3>
    
     <div class="social">
    
      
        <a href="https://www.facebook.com/CEGMotorsports.BAJA/"><i class="fa fa-facebook"></i></a>
    
        <a href="https://twitter.com/CEGMotorsports?s=08"><i class="fa fa-twitter"></i></a>
      
        <a href="https://www.instagram.com/ceg_motorsports/?igshid=eoay9ko1ecf9"><i class="fa fa-instagram"></i></a>
    
        <a href="https://www.linkedin.com/company/ceg-motorsports/"><i class="fa fa-linkedin"></i></a>
     
     </div>
      
       <div class="home">
        <p>
          <font color="#ebebeb"><i class="fa fa-envelope"></i>&nbsp;cegmotorsports@gmail.com<br><br>
          <i class="fa fa-map-marker"></i>&nbsp;&nbsp;Location: Mechanical Department, Anna University, Chennai-600025

</font>
        <br><br><p>
        <center><font color="#ebebeb"><p> &copy; CEGMOTORSPORTS 2020.</p></center></font>
       </div>

   </div>
