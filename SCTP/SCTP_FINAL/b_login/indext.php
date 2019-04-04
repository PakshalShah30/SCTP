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
  <link href="design/mystyle.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>SCTP_FINAL</title>


  <style>
.h5{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 20px;
    padding: 2px;
}

    </style>




</head>

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
        <a class="navbar-brand" href="#user_specs">HI <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
        
        
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



  <div class="jumbotron text-center">
    <h1>Smart City Travel Planner</h1> 
    <p>We specialize in making the perfect travel itinery for you</p> 
    <form>
      <div class="input-group">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <div class="input-group-btn">
          <button type="button" class="btn btn-danger">Subscribe</button>
        </div>
      </div>
    </form>
  </div>
  




<h5><center><b>ON THE BASIS OF YOUR TIME CONSTRAINTS, DECIDE YOUR TRAVEL ITINERY BASED ON OUR BEST SUGGESTIONS</b></center></h5>













  <div class="wrapper">
<form action="smart_travel.php" method="GET">

<label><b>HOURS</b></label>      
<input type="text"  name="query"
class="form-control">

<label><b>CITY</b></label>
      <input type="text" name="query1"
      class="form-control">

      <label><b>LOCATION</b></label>       
      <input type="text" name="query2"
      class="form-control">

      <input type="SUBMIT" value="search"
      class="btn btn-danger">
    </form>
   
   
   
   
   
    <h1 id="user_specs">
        <a button type="button" href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a button type="button" href="index.html" class="btn btn-danger">Sign Out of Your Account</a>
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













