<?php
include("connectDB.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RoofLand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">

    <link rel="stylesheet" href="css/loginstyle.css">
    <!-- test -->

    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/fav1.png" alt="RoofLand" width="115px"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
	      </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="agent.php" class="nav-link">Officer</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/giovany3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay">
        <div class="container">
          <div class="row no-gutters slider-text justify-content-center align-items-center">
            <div class="col-lg-7 col-md-5 ftco-animate d-flex align-items-end">
              <div class="booking-form-login">
                <div class="form-login">
                      <ul class="tab-group">
                        <li class="tab active"><a href="#login">Log In</a></li>
                        <li class="tab"><a href="#signup">Sign Up</a></li>
                      </ul>
<!-- ////////////////////////////////////login////////////////////////////////////////////////// -->
                      <div class="tab-content">
                        <div id="login">
                          <h1>Welcome Back!</h1><br>
                          <form method="post" action = "login.php">
                            <div class="field-wrap">
                            <input placeholder="Username" style="color:white;" type="text" required name="username" autocomplete="off"/>
                          </div>

                          <div class="field-wrap">
                            <input placeholder="Password" style="color:white;" type="password" required name="password" autocomplete="off"/>
                          </div>
                          <p class="forgot"><a href="#">Forgot Password?</a></p>
                          <!-- <a href="profileHousingOfficer.php"> -->
                          <button class="button button-block" type="submit" name="login_applicant">Log In</button>
                          <!-- </a> -->
                          </form>
                        </div>
<!-- ////////////////////////////////////////Signup////////////////////////////////////// -->
                        <div id="signup">
                          <h1>Sign Up for Free</h1><br>
                            <form method="post" action = "connectDB.php">
                              <div class="top-row">
                                <div class="field-wrap">
                                  <input style="color:white;"placeholder="Full Name" type="text" name="fullname" required autocomplete="off" />
                                </div>
                                <div class="field-wrap">
                                  <input style="color:white;"placeholder="Username" type="text" name="username" required autocomplete="off"/>
                                </div>
                              </div>

                              <div class="field-wrap">
                                <input style="color:white;"placeholder="Email Address" type="email" name="email" required autocomplete="off"/>
                              </div>
                              <div class="field-wrap">
                                <input style="color:white;"placeholder="Password" type="password" name="password" required autocomplete="off"/>
                              </div>
                              <div class="field-wrap">
                                <input style="color:white;"placeholder="Monthly Income" type="decimal" name="monthlyIncome" required autocomplete="off"/>
                              </div>
                              <!-- <form class="" action="index.php" method="post"> -->

                              <select  name="price" class="btn-dropdown-location" data-toggle="dropdown">
                                <option value="" disabled selected>User type</option>
                                <option value="HousingOfficer">Housing Officer</option>
                                <option value="Applicant">Applicant</option>
                              </select>
                              <div class="field-wrap"></div>
                              <div class="">
                                <button type="submit" class=" button button-block" name="applicant_reg" onclick="alert_signup()">Get Started</button>

                              </div>
                            </div>
                          </form>
                        </div><!-- tab-content -->
                      </div> <!-- /form -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">RoofLand</h2>
          <p>Convenience within the comforts of home</p>
          <ul class="ftco-footer-social list-unstyled mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Community</h2>
          <ul class="list-unstyled">
            <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li> <!-- Link to the home page to search -->
            <li><a href="faq.php"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li> <!-- Link to FAQ page -->
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <ul class="list-unstyled">
            <li><a href="about.php"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li> <!-- Linked to about page -->
            <li><a href="agent.php"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li> <!-- Linked to agent page -->
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">No 15 Jalan Sri Semantan 1, <br>Bukit Damansara,<br> 50490, Kuala Lumpur</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+603 2095 8791</span></a></li>
              <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@helplive.edu.my</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script></p> <!-- Automated year-->
      </div>
    </div>
  </div>
</footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
<script>

// // Code to show show_alert
function alert_signup() {
  alert("Applicant successfully registered");
}



$('.tab a').on('click', function (e) {

  e.preventDefault();

  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');

  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();

  $(target).fadeIn(600);

});


var options = {
  types: ['(cities)'],
  componentRestrictions: {country: "my"}
 };

function activatePlacesSearch(){
  var input = document.getElementById('search_term');
  var autocomplete =new google.maps.places.Autocomplete(input,options) ;
}

</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiJpItFnQTP3RsN4yQ9sxi7p16L9wQru4&libraries=places&callback=activatePlacesSearch"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/script.js"></script>
  </body>
</html>
