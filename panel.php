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
    
  @import "bourbon";

.wrapper {  
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
  .checkbox {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }

  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
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

    <div class="wrapper">
    <form class="form-signin" action="login.php" method="POST">       
      <h2 class="form-signin-heading">ADMIN PANEL</h2>
      <input type="text" class="form-control" name="uname" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="pwd" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
   
</body>
</html>
