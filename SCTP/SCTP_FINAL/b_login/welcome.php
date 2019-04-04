<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="design/mystyle.css" rel="stylesheet" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>SCTP_FINAL</title>


    <!-- <style type="text/css"> -->
        <!-- body{ font: 7px sans-serif; text-align: center; } -->
    <!-- </style> -->
</head>
<body>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <!-- <a class="navbar-brand" href="index.html">SCTP</a> -->
        <a class="navbar-brand">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
        <!-- <a class="navbar-brand" href="registration/login.php">LOGIN</a> -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="a_plan.php">PLANS</a></li>
          <li><a href="a_blog.php">BLOG</a></li>
          <li><a href="a_map.php">MAP</a></li>
          <li><a href="a_itinery.php">YOUR ITINERY</a></li>
          <li><a href="a_contact.php">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1>
  <h1>.</h1> -->
  <!-- <h1>
        <a button type="button" href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a button type="button" href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</h1> -->

    <!-- <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div> -->
    <!-- <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> -->


 <!-- Container (Services Section) -->
 <div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-time logo-small"></span>
        <h4>TIME</h4>
        <p>Estimated time of arrival and departure</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-headphones logo-small"></span>
        <h4>TRANSLATIONS</h4>
        <p>We provide an overview of the location in 16 different languages</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Sit back and relax we will plan a perfect day for you</p>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-gift logo-small"></span>
        <h4>GIFTS</h4>
        <p>We have exclusive offers and discounts</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Certified under section xxx</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-exclamation-sign logo-small"></span>
        <h4 style="color:#303030;">SAFETY</h4>
        <p>Your safety is our priority</p>
      </div>
    </div>
  </div>
    <h1>
        <a button type="button" href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a button type="button" href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</h1>

    <footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>TOP</p>
  </footer> 
  
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
    
    $(window).scroll(function() {
      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
  
        var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
      });
    });
  })
  </script>




</body>
</html>