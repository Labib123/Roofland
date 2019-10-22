<?php
// session_destroy();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// session_start();
$connection=mysqli_connect("localhost","root","","roofland");

$errors = array();

//register Applicant

if (isset($_POST['applicant_reg']))
{
  //
  // if (isset ($_POST['fullname'], $_POST['username'], $_POST['email'], $_POST['password'],
  // $_POST['userType'], $_POST['monthlyIncome'])){
  $username = $_POST['username'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $userType = $_POST['userType'];
  $password =$_POST['password'];
  $monthlyIncome = $_POST['monthlyIncome'];


  echo ("im working");

  var_dump(isset ($_POST['fullname'], $_POST['username'], $_POST['email'], $_POST['password'],
  $_POST['userType'], $_POST['monthlyIncome']));
  // echo("var dump success");


      echo (" NAME " . $_POST['fullname']);

      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
      $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
      $userType = filter_input(INPUT_POST, 'userType', FILTER_SANITIZE_STRING);
      $monthlyIncome = filter_input(INPUT_POST, 'monthlyIncome', FILTER_SANITIZE_STRING);

      // if ($userType ==)



      // Create hashed password using the password_hash function.
      // This function salts it with a random salt and can be verified with
      // the password_verify function.
      // $password = password_hash($password, PASSWORD_DEFAULT);


      // echo("before       ");
      // echo (" fillnsme" .$fullname. " username". $username);
      $query = "INSERT INTO applicant (fullname, username, email, password, userType, monthlyIncome)
    			  VALUES('$fullname', '$username', '$email', '$password', '$userType','$monthlyIncome')";

      echo($query);
    	mysqli_query($connection, $query);
    	$_SESSION['username'] = $username;
    	$_SESSION['success'] = "You are now logged in";

    	header('location: login.php');
      echo "<script>alert('Applicant registered succesfully!')</script>";
      // }
      // else
      // {
      //   echo "not working";
      // }
}


// /////////////////////////////////////////////////////////////

if (isset($_POST['officer_reg']))
{
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($connection, $_POST['fullname']);
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $userType = mysqli_real_escape_string($connection, $_POST['userType']);
  $monthlyIncome = mysqli_real_escape_string($connection, $_POST['monthlyIncome']);


  // // form validation: ensure that the form is correctly filled ...
  // // by adding (array_push()) corresponding error unto $errors array
  // if (empty($username)) { array_push($errors, "Username is required"); }
  // if (empty($fullname)) { array_push($errors, "Name is required"); }
  // if (empty($address)) { array_push($errors, "Address is required"); }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  // if ($password_1 != $password_2) {
	// array_push($errors, "The two passwords do not match");

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM housingOfficer WHERE username='$username'  LIMIT 1";
  $result = mysqli_query($connection, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user)
  { // if user exists
    if ($user['username'] === $username)
    {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password);//encrypt the password before saving in the database

    $query = "INSERT INTO applicant (fullname, username, email, password,userType,monthlyincome)
          VALUES('$fullname', '$username', '$email', '$password', '$userType','$monthlyIncome')";

          if(mysqli_query($connection, $query)){
            echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
        }
    // mysqli_query($connection, $query);
    // $_SESSION['username'] = $username;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: profileHousingOfficer.php');
  }
}

// Applicant login ////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST['login_applicant'])) {

  // $password = $_POST['password'];
  // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  // $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  //to get the username and password and avoid empty space
  $username = $_POST['username'];
  $password = $_POST['password'];



  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  elseif (empty($password)) {
  	array_push($errors, "Password is required");
  }
  else
  {
    $query_login = "SELECT * from applicant where username = '$username' and password='$password'";

    $results =mysqli_query($connection,$query_login);
     if (mysqli_num_rows($results))
     {
       // $row = mysqli_fetch_assoc($results);
       // $pass_check = $row['password'];
       //
       // if ($password==$pass_check)
       // {
        session_start();
         $_SESSION['username']=$username;
         $_SESSION['password']=$password;
         $_SESSION['email']=$email  ;
         $_SESSION['monthlyIncome']=$monthlyIncome;
         echo "<script>window.open('profileApplicant.php','_self')</script>";




       // }

     }else{
       echo "<script>alert('wrong username/password combination')</script>";
       echo "<script>window.open('login.php','_self')</script>";
     }

  }
}


//--------------------Jun's codes-----------------------
//setupResidence
if (isset($_POST['add_residence'])){
  $residenceName = $_POST['residenceName'];
  $location = $_POST['location'];
  $monthlyRent = $_POST['monthlyRent'];
  $mySelect = $_POST['mySelect'];
  $sizeperUnit =$_POST['sizePerUnit'];
  $numofUnits = $_POST['numOfUnit'];
  // // $officerID =  $_SESSION['officerID'];
  // // $query = "SELECT * FROM housingOfficer WHERE officerID=$officerID";
  // // $result = mysqli_query($query);
  // // $num_rows = mysqli_num_rows($result);
  // echo "im working";

  //insert issue - Cannot add or update a child row: a foreign key constraint fails
  $res = "INSERT INTO residence (residenceName, location, price, facilities, sizePerUnit, numOfUnit, officerID)
           VALUES('$residenceName', '$location', '$monthlyRent', '$mySelect', '$sizeperUnit', '$numofUnits', 2)"; //2 is supposed to foerign key from the housingofficer table
  // if(mysqli_query($connection, $res)){
  //   echo "Inserted";
  // }else{
  //   echo "Error " .mysqli_error($connection);
  // }
}

//search_residence
// $filter = "SELECT * FROM residences WHERE location = ''";
if(isset($_POST['search_residence'])){
  $locationToSearch = $_GET('location');
  $priceToSearch = $_GET('price');

  $filter = "SELECT * FROM residences WHERE location = $locationToSearch AND price = $priceToSearch";
  $serach_result = filterTable($filter);
  // $query_login = "SELECT * from applicant where username = '$username' and password='$password'";
  //
  // $results =mysqli_query($connection,$query_login);
}
else{
  $filter = "SELECT * FROM residences";
  $search_result = filterTable($filter);
}

function filterTable($filter){
  $connection = mysqli_connect("localhost","root","","roofland");
  $filter_Result = mysqli_query($connection,$filter);
  return $filter_Result;
}
?>
