<?php
  include("connectDB.php");
  // $username = $_SESSION['username'];
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
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/fav1.png" alt="RoofLand" width="115px"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
	      </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="agent.html" class="nav-link">Officer</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <br><br>
    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/giovany3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay">
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
            <!-- partial:index.partial.html -->
            <div class="booking-form-setup">
              <div class="tab-content">
                <div id="single">
                  <h1 class='booking-header' style="color:white;">Setup Residence</h1>
                  <form action = "setupResidence.php" method="post">
                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Residence Name -->
                          <input required id="residenceName" name="residenceName" aria-autocomplete="list" aria-expanded="false" autocomplete="off"
                                    autocorrect="off" spellcheck="false" id="Koan-magic-carpet-koan-search-bar__input"
                                    role="combobox" data-veloute="input__Koan-magic-carpet-koan-search-bar__input"
                                    placeholder="Residence Name" style="color:white;">
                        </div>
                      </div>
                      <div class="col">
                        <div class="field-wrap-setup">
                          <div required class="dropdown">
                            <select name="location" id = "location" class="btn-dropdown-location" data-toggle="dropdown">
                              <option value="" disabled selected>Location</option>
                              <option value="l1">Selangor</option>
                              <option value="l2">Penang</option>
                              <option value="l3">Johor</option>
                              <option value="l4">Sabah</option>
                              <option value="l5">Sarawak</option>
                              <option value="l6">Perak</option>
                              <option value="l7">Kedah</option>
                              <option value="l8">Kelantan</option>
                              <option value="l9">Pahang</option>
                              <option value="l10">Terengganu</option>
                              <option value="l11">Malacca</option>
                              <option value="l12">Negeri Sembilan</option>
                              <option value="l13">Kuala Lumpur</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Number of Units -->
                          <input required id="numofUnits" name="numofUnits" aria-autocomplete="list" aria-expanded="false" autocomplete="off"
                                    autocorrect="off" spellcheck="false" id="Koan-magic-carpet-koan-search-bar__input"
                                    role="combobox" data-veloute="input__Koan-magic-carpet-koan-search-bar__input"
                                    placeholder="Number of Units" style="color:white;">
                        </div>
                      </div>
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Monthly Rent -->
                          <input required id="monthlyRent" name="monthlyRent" aria-autocomplete="list" aria-expanded="false" autocomplete="off"
                                    autocorrect="off" spellcheck="false" id="Koan-magic-carpet-koan-search-bar__input"
                                    role="combobox" data-veloute="input__Koan-magic-carpet-koan-search-bar__input"
                                    placeholder="Monthly Rent (RM)" style="color:white;">
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Size per Unit -->
                          <input required id="sizeperUnit" name="sizeperUnit" aria-autocomplete="list" aria-expanded="false" autocomplete="off"
                                    autocorrect="off" spellcheck="false" id="Koan-magic-carpet-koan-search-bar__input"
                                    role="combobox" data-veloute="input__Koan-magic-carpet-koan-search-bar__input"
                                    placeholder="Size per Unit (sqr ft)" style="color:white;">
                        </div>
                      </div>
                    </div>

                    <form class="field-wrap" id="myFacilities"> <!-- Facilities -->
                      <div class="field-wrap-setup">
                        <div class="dropdown">
                          <div id='btn' class="btn-dropdown-facilities">
                            <p style="color:white;">Press CTRL to select multiple options at once</p>
                            <select id="mySelect" name="mySelect" class="btn-dropdown-location">
                              <option value="" disabled selected>Select Facilities</option>
                              <option value="pool">Swimming Pool</option>
                              <option value="gym">Gym</option>
                              <option value="cafeteria">Cafeteria</option>
                              <option value="squash_court">Squash Court</option>
                              <option value="bbq">BBQ pit</option>
                              <option value="familyMart">Family Mart</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </form>

                    <div class="form-row">
                      <div class="col">
                        <input style="color:white;" type="file" name="pic" accept="image/*">
                      </div>
                    </div>
                    <br>
                    <button type="submit" name="add_residence" class="button button-block" onclick="show_alert();">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
   <footer class="ftco-footer ftco-section">
     <div class="container">
       <div class="row mb-5">
         <div class="col-md">
           <div class="ftco-footer-widget mb-4">
             <h2 class="ftco-heading-2">RoofLand</h2>
             <p>Homes right at your fingertips</p>
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
               <li><a href="index.html"><span class="icon-long-arrow-right mr-2"></span>Search Properties</a></li> <!-- Link to the home page to search -->
               <li><a href="faq.html"><span class="icon-long-arrow-right mr-2"></span>FAQs</a></li> <!-- Link to FAQ page -->
             </ul>
           </div>
         </div>
         <div class="col-md">
           <div class="ftco-footer-widget mb-4 ml-md-4">
             <h2 class="ftco-heading-2">About Us</h2>
             <ul class="list-unstyled">
               <li><a href="about.html"><span class="icon-long-arrow-right mr-2"></span>Our Story</a></li> <!-- Linked to about page -->
               <li><a href="agent.html"><span class="icon-long-arrow-right mr-2"></span>Meet the team</a></li> <!-- Linked to agent page -->
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
  function show_alert() {
    alert("Residence Created");
  }
  </script>

  <script>
   var btn = document.getElementById("btn");
   btn.addEventListener("click" , multipleFunc);;
   function multipleFunc() {
     document.getElementById("mySelect").multiple = true;
   }
  </script>
  </body>
</html>
