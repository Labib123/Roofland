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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profilestyle.css">
  </head>

  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img src="images/fav1.png" alt="RoofLand" width="115px"></img></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="agent.php" class="nav-link">Officer</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                officer123
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item active" href="profileApplicant.php">Profile</a>
                <a class="dropdown-item" href="residenceTable.php">My Residence</a>
                <a class="dropdown-item" href="viewApplications.php">My Application</a>
                <a class="dropdown-item" href="login.php">Logout</a>
              </div>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/giovany3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div><br>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <div class="booking-form-profileApp">
              <div class="tab-content">
                <div id="single">
                  <div id="user" class="container profile" style="display: none;">
                    <div class="row">
                      <div class="col text-center mt-3">
                        <img alt="picture" src="https://qodebrisbane.com/wp-content/uploads/2019/07/This-is-not-a-person-2-1.jpeg" class="img-lg rounded-circle border shadow" />
                        <h2 class="mt-3" style="color:white;">officer123</h2>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-hover table-sm table-properties">
                              <tr v-show="user.given_name">
                                <th>Full name</th>
                                <td><!--{{user.given_name}}-->Jennifer Hudson</td>
                              </tr>
                              <tr v-show="user.name">
                                <th>Username</th>
                                <td><!--{{user.name}}-->officer123</td>
                              </tr>
                              <tr v-show="user.password">
                                <th>Password</th>
                                <td><!--{{user.password}}-->officer123</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!--END BG-->

    <!--footer-->
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
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js'></script>
  <script  src="js/profilescript.js"></script>
  </body>
</html>
