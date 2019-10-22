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
                 <a class="dropdown-item" href="profileApplicant.php">Profile</a>
                 <a class="dropdown-item" href="applicantApplication.php">My Application</a>
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
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"> <!--slider text for animation-->
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Submit Application <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread" style="color:black;">Submit Application</h1>
          </div>
        </div>
      </div>
    </section>
    <br>
    <!-- END Background and Title -->
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
          	<h2 class="text-center">Application Form</h2>
            <form class="bg-light p-5 contact-form"> <!--onsubmit="alert('Application Submitted Successfully')"-->
              <div class="row"> <!-- Row 1-->
                <div class="col-6">
                  <!-- First Name -->
                    <div class="form-group">
                      <label>Full Name</label>
                      <input id='applicantName' type="text" class="form-control" placeholder="John Peter (auto)">
                    </div>
                </div>
                <div class="col-6">
                  <!-- Last Name -->
                    <div class="form-group">
                      <label>Username</label>
                      <input id='applicantUsername' type="text" class="form-control" placeholder="jp101 (auto)">
                    </div>
                </div>
              </div>

              <div class="row"> <!-- Row 2-->
                <div class="col-6">
                  <!-- Email -->
                    <div class="form-group">
                      <label>Email</label>
                      <input id='email' type="text" class="form-control" placeholder="jpeter@gmail.com (auto)">
                    </div>
                </div>
                <div class="col-6">
                  <!-- Monthly Income -->
                    <div class="form-group">
                      <label>Salary (RM)</label>
                      <input id='salary' type="text" class="form-control" placeholder="xxxx (auto)">
                    </div>
                </div>
              </div>

              <div class="row"> <!-- Row 3-->
                <div class="col-6">
                  <!-- ResidenceID -->
                  <div class="form-group">
                    <label>ResidenceID</label>
                    <input id='residenceID' type="text" class="form-control" placeholder="R14529 (auto)">
                  </div>
                </div>
                <div class="col-6">
                  <!-- Residence Name -->
                    <div class="form-group">
                      <label>Residence Name</label>
                      <input id='residenceName' type="text" class="form-control" placeholder="Prima 16 Condominium (auto)">
                    </div>
                </div>
              </div>

              <div class="row"> <!-- Row 5-->
                <div class="col-6">
                  <!-- Monthly Rent -->
                    <div class="form-group">
                      <label>Monthly Rent (RM)</label>
                      <input id='monthRent' type="text" class="form-control" placeholder="xxxx (auto)">
                    </div>
                </div>
                <div class="col-6">
                  <!-- Number of Units Available -->
                  <div class="form-group">
                    <label>Number of Units</label>
                    <input id='noOfUnitAvai' type="text" class="form-control" placeholder="xx (auto)">
                  </div>
                </div>
              </div>

              <div class="row"> <!-- Row 6-->
                <div class="col-6">
                  <!-- Start Date -->
                  <div class="form-group">
                    <label>Start Date</label>
                    <input id='startDate' type="date" class="form-control" placeholder="dd/mm/yyyy" min="2019-01-01" max="2090-12-31">
                  </div>
                </div>
                <div class="col-6">
                  <!-- End Date -->
                  <div class="form-group">
                    <label>End date</label>
                    <input id='endDate' type="date" class="form-control" placeholder="dd/mm/yyyy" min="2019-01-01" max="2090-12-31">
                  </div>
                </div>
              </div>

              <!--Month and Year -->
              <div class="form-group">
                <label>Month and Year</label>
                <input id='montYear' type="month" class="form-control">
              </div>
              <label> </label>

              <div class="row"> <!-- Row BUTTONS-->
                <div class="col-6">
                  <div class="form-group">
                     <a href="viewApplications.php"><input id='submit' type="submit" value="Apply" class="btn btn-primary py-3 px-5"></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <a href="properties-single.php"><input id='back' type="button" value="Back" class="btn btn-secondary py-3 px-5"> </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- END Application Form-->
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

  </body>
</html>
