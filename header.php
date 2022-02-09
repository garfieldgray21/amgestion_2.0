<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0A7CFF">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AM Gestion Ltd</title>
    <link rel="icon" href="assets/img/tab-icon.png">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Vendors  -->
    <script src="https://use.fontawesome.com/b9f5f038ee.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/styles.css">

  </head>
  <body>

  <!-- Navbar effect on scorll -->
  <script>
    function navX(x) {
      x.classList.toggle("change");
    };
  </script>

  <!--
    ========================
    NAVIGATION BAR
    ========================
  -->

  <nav class="navbar navbar-main navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
    <div onclick="navX(this)" id="navBarBtn">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarMain">
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
    </div>
      <a class="navbar-brand" href="index.php">
        <img src="assets/img/navbar-logo.png" class="navImg">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Gallery</a></li> 

        <li id="moreTab"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#">FAQ</a></li> 
              <li><a href="#">Blog</a></li>  
              <li><a href="#">Clients</a></li>            
            </ul>
        </li>

        <li id="moreTab"><a href class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-language" aria-hidden="true"></i></i></a>
          <ul class="dropdown-menu">
            <li><a href="">Espanol</a></li>
          </ul>
        </li>

        <!--<button class="btn btn-navBtn navbar-btn">Get in touch</button>-->
      </ul>

    </div>
  </div>
  </nav>