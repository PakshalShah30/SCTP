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



  <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
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
        <a class="navbar-brand" href="index.html">SCTP</a>
        <a class="navbar-brand" href="login.php">LOGIN</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="blog.html">BLOG</a></li>
          <li><a href="portfolio.html">PORTFOLIO</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- <div class="jumbotron text-center">
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
   -->
  
  <!-- Container (About Section) -->
  <!-- <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>What do we do</h2><br>
        <h4>We plan your perfect day out. </h4><br>
        <p>A planned itinery based on your choices and preferences to make your day beautiful.</p>
        <br><button class="btn btn-default btn-lg">Get in Touch</button>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-signal logo"></span>
      </div>
    </div>
  </div>
   -->
  
  <!-- Container (Services Section) -->
  <!-- <div id="services" class="container-fluid text-center">
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
        <h4>Translations</h4>
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
  </div> -->
  








  
  <!-- Container (Portfolio Section) -->
  <div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>your preferences</h2><br>
    <h4>What are your interests</h4>
    <div class="row text-center slideanim">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/m_art.jpg" alt="Paris" width="400" height="300">
          <p><strong>ART</strong></p>
          <p>Explore the beauty of the city </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai1.jpg" alt="New York" width="400" height="300">
          <p><strong></strong>SCIENCE</strong></p>
          <p>Get smarter</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai2.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>CINEMA</strong></p>
          <p>Its showtime</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai3.jpg" alt="New York" width="400" height="300">
          <p><strong>FOOD</strong></p>
          <p>Are you a food lover </p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai4.jpg" alt="New York" width="400" height="300">
          <p><strong>PARKS</strong></p>
          <p>Relax and peace out</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai5.jpg" alt="New York" width="400" height="300">
          <p><strong>MALLS</strong></p>
          <p>Go Shopping</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/mumbai.jpg" alt="New York" width="400" height="300">
          <p><strong>BEACH</strong></p>
          <p>Beach day out</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>ZOO</strong></p>
          <p>Kids love zooo's</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="images/paris.jpg" alt="New York" width="400" height="300">
          <p><strong>AMUSEMENT PARKS</strong></p>
          <p>Enjoy yor day out with your family </p>
        </div>
      </div>
    </div><br>
    
    <!-- <h2>What our customers say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel"> -->
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
  
      <!-- Wrapper for slides -->
      <!-- <div class="carousel-inner" role="listbox">
        <div class="item active">
          <h4>"This company is the best. I am so happy with the result!"<br><span>Pakshal Shah, Vice President, Comment Box</span></h4>
        </div>
        <div class="item">
          <h4>"One word... WOW!!"<br><span>Amey Sawant, Manager, Rep Inc</span></h4>
        </div>
        <div class="item">
          <h4>"Could I... BE any more happy with this company?"<br><span>Naval Dhandha, Actor, Snakes on a plane</span></h4>
        </div>
      </div>
   -->
      <!-- Left and right controls -->
      <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
   -->
  
  <!-- Container (Contact Section) -->
  <!-- <div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Mumbai, IND</p>
        <p><span class="glyphicon glyphicon-phone"></span> +91 9930775321</p>
        <p><span class="glyphicon glyphicon-envelope"></span> pakshal1@yahoo.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  
  
  
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
  