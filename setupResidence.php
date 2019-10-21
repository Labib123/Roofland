<?php
  include("connectDB.php");
  //$username = $_SESSION['username'];
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
                <a class="dropdown-item" href="profileHousingOfficer.php">Profile</a>
                <a class="dropdown-item active" href="residenceTable.php">My Residence</a>
                <a class="dropdown-item" href="viewApplications.php">My Application</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
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
            <div class="booking-form-setup">
              <div class="tab-content">
                <div id="single">
                  <h1 class='booking-header' style="color:white;">Setup Residence</h1>
                  <form action = "connectDB.php" method="post">
                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Residence Name -->
                          <input required id="residenceName" name="residenceName"
                                spellcheck="false" placeholder="Residence Name" style="color:white;">
                        </div>
                      </div>
                      <div class="col">
                        <div class="field-wrap-setup">
                          <div class="dropdown">
                            <select required name="location" id="location" class="btn-dropdown-location" data-toggle="dropdown">
                              <option value="" disabled selected>Location</option>
                              <option value="Selangor">Selangor</option>
                              <option value="Penang">Penang</option>
                              <option value="Johor">Johor</option>
                              <option value="Sabah">Sabah</option>
                              <option value="Sarawak">Sarawak</option>
                              <option value="Perak">Perak</option>
                              <option value="Kedah">Kedah</option>
                              <option value="Kelantan">Kelantan</option>
                              <option value="Pahang">Pahang</option>
                              <option value="Terengganu">Terengganu</option>
                              <option value="Malacca">Malacca</option>
                              <option value="Negeri Sembilan">Negeri Sembilan</option>
                              <option value="Kuala Lumpur">Kuala Lumpur</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Number of Units -->
                          <input type="number" required id="numofUnits" name="numOfUnit"
                                 spellcheck="false" placeholder="Number of Units" style="color:white;">
                        </div>
                      </div>
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Monthly Rent -->
                          <input type="number" required id="monthlyRent" name="monthlyRent"
                                spellcheck="false" placeholder="Monthly Rent (RM)" style="color:white;">
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col">
                        <div class="field-wrap-setup"> <!-- Size per Unit -->
                          <input type="number" required id="sizeperUnit" name="sizePerUnit"
                                  spellcheck="false" placeholder="Size per Unit (sqr ft)" style="color:white;">
                        </div>
                      </div>
                    </div>
                    <!-- Facilities -->
                    <div class="field-wrap-setup">
                      <div class="dropdown">
                        <div id='btn' class="btn-dropdown-facilities">
                          <p style="color:white;">Press CTRL to select multiple options at once</p>
                          <select id="mySelect" name="mySelect" class="btn-dropdown-location" style="font-size:23px">
                            <option value="" disabled selected>Select Facilities</option>
                            <option value="Swimming Pool">Swimming Pool</option>
                            <option value="Gym">Gym</option>
                            <option value="Cafeteria">Cafeteria</option>
                            <option value="BBQ">BBQ</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col">
                        <input style="color:white;" type="file" name="picture" accept="image/*">
                      </div>
                    </div>
                    <br>
                    <button type="submit" name="add_residence" class="button button-block">Submit</button>
                    <!-- <input class="button button-block" type="submit" name "add_residence" value="Submit"> -->
                  </form>
                </div><!--single-->
              </div><!-- tab content-->
            </div><!--booking-form-setup-->
          </div>
        </div>
      </div><!--container-->
    </div> <!--overlay-->
  </div>

  <!-- Footer -->
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

<?php
  $residenceName = $_POST['residenceName'];
  $location = $_POST['location'];
  $monthlyRent = $_POST['monthlyRent'];
  $mySelect = $_POST['mySelect'];
  $sizeperUnit =$_POST['sizeperUnit'];
  $numofUnits = $_POST['numofUnits'];

  if(isset($_POST["add_residence"])){
      if($query = mysql_query("INSERT INTO  residence (residenceName, location, monthlyRent, mySelect, sizeperUnit, numofUnits)
                              VALUES('$residenceName', '$location', '$monthlyRent', '$mySelect','$sizeperUnit', '$numofUnits')")){
        echo "Success";
      }else{
        echo "Failure";
      }
  }
?>
