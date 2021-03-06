<!DOCTYPE html>
<html lang="en">
  <head>

    <title>RoofLand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/applicantProfile.css">
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
                Username
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item " href="profileHousingOfficer.php">Profile</a>
                <a class="dropdown-item" href="residenceTable.php">My Residence</a>
                <a class="dropdown-item" href="#">My Application</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/giovany3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Applications <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread" style="color:black;">Applicant Profile</h1>
          </div>
        </div>
      </div>
    </section>
    <br>
    <!-- START Applicant Profile -->
    <div style="margin:100px;">
      <div class="container">
        <div class="row profile">
          <div class="col-md-3">
            <div class="profile-sidebar">
              <!-- SIDEBAR USERPIC -->
              <div class="profile-userpic">
                <img class=''src="http://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" alt="">
              </div>
              <!-- END SIDEBAR user name
              USERPIC -->
              <!-- SIDEBAR USER TITLE -->
              <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                  Labib Mansour
                </div>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              <!-- SIDEBAR BUTTONS -->
              <div class="profile-userbuttons">
                <i id="rejected" style="display: none;" class="fa fa-ban fa-5x" aria-hidden="true"></i>
                <i id="accepted" style="display: none;" class="fa fa-check-circle fa-5x center" aria-hidden="true"></i>
                <button id='accept'onclick='accepted()' type="button"
                        class="btn btn-success btn-sm">Accept</button>
                <button id='reject' onclick='alert("Applicant is successfully Rejected ");
                        document.getElementById("rejected").style.display="block"; this.style.display="none";
                        document.getElementById("accept").style.display="none"' type="button"
                        class="btn btn-danger btn-sm">Reject</button>
              </div>
              <!-- END SIDEBAR BUTTONS -->
            </div>
          </div>
          <div id='durationArea' class="row">
            <div id="section1" class="col-md-2">
              <div class="profile-user-info">
                <!-- Row 1: Username -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Username</div>
                  <div class="profile-info-value">
                    <span>Labib123</span>
                  </div>
                </div>
                <!-- Row 2: Full Name -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Full Name</div>
                  <div class="profile-info-value">
                    <span>Labib Mansour</span>
                  </div>
                </div>
                <!-- Row 3: Monthly Salary -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Monthly Salary (RM)</div>
                  <div class="profile-info-value">
                    <span>2000</span>
                  </div>
                </div>
                <!-- Row 4: Residence ID -->
                <div class="profile-info-row">
                  <div class="profile-info-name">ResidenceID</div>
                  <div class="profile-info-value">
                    <span>R123</span>
                  </div>
                </div>
                <!-- Row 4: Month -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Month</div>
                  <div class="profile-info-value">
                    <span>08</span>
                  </div>
                </div>
                <!-- Row 5: Year -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Year</div>
                  <div class="profile-info-value">
                    <span>2019</span>
                  </div>
                </div>
                <!-- Row 6: Monthly Rent -->
                <div class="profile-info-row">
                  <div class="profile-info-name">Monthly Rent</div>
                  <div class="profile-info-value">
                    <span>RM800</span>
                  </div>
                </div>
              </div> <!--END profilr-user-info -->
            </div> <!-- END section1 -->
          </div> <!-- END durationArea -->
        </div> <!-- End row profile -->
      </div> <!-- END container -->
    </div>
    <!-- END Profile -->
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
  <script type="js/profilescript.js"></script>

  <script src="js/viewApplications.js"></script>
  <script type="text/javascript">



 function accepted() {
  alert("Applicant is successfully accepted ");
  document.getElementById("accept").style.display="none" ;
  document.getElementById("accepted").style.display="block";
  document.getElementById("reject").style.display="none" ;
  var section1 = document.getElementById('section1') ;
  section1.style.display='none' ;
  document.getElementById('section2').style.display='none' ;
  var duration =  document.createElement('DIV');
  duration.className = 'duration' ;
  duration.innerHTML = `

  <div class="dropdown">
  <div> Duration: </div>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Please enter the Duration
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">12 Month </a>
    <a class="dropdown-item" href="#">18 Month</a>
  </div>
</div>

  ` ;
  var area = document.getElementById('durationArea') ;
  area.appendChild(duration);

}
  </script>

  </body>
</html>
