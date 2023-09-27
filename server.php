<?php
session_start();

$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$username = "";
$email    = "";
$errors = array();

$db = new mysqli($servername, $dbuser, $dbpassword, $dbname);

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $age = mysqli_real_escape_string($db, $_POST['age']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }

  $user_check_query = "SELECT * FROM userdata WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already used");
    }
  }

  if (count($errors) == 0) {
  	$query = "INSERT INTO users (username, email, password, age) 
  			  VALUES('$username', '$email', '$password', '$age')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}  
?>
