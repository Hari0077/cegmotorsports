<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ceg Motorsports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
 <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<style>
.mySlides {display:none;}

 .container.gallery-container {
    background-color: black;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}
.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}


</style>
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
<div class="gallery">
 <i> <h2> Our Gallery</h2> </i>
</div>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="images/img 3.png" style="width:100%">

  <img class="mySlides" src="images/event 3.JPG" style="width:100%">
  <img class="mySlides" src="images/wheelie.png" style="width:100%">
  
  <img class="mySlides" src="images/event 4.JPG" style="width:100%">
  <img class="mySlides" src="images/event 5.JPG" style="width:100%">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<div class="container gallery-container">

    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/1.jpg">
                    <img src="images/1.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/2.jpg">
                    <img src="images/2.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/3.jpg">
                    <img src="images/3.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/4.jpg">
                    <img src="images/4.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/5.jpg">
                    <img src="images/5.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/6.jpg">
                    <img src="images/6.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/7.jpg">
                    <img src="images/7.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/8.jpg">
                    <img src="images/8.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/9.jpg">
                    <img src="images/9.jpg" alt="" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/10.jpg">
                    <img src="images/10.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/11.jpg">
                    <img src="images/11.jpg" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/12.jpg">
                    <img src="images/12.jpg" alt="">
                </a>
            </div>
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

 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
