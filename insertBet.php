<?php
    include 'authentica.php';
    $servername="localhost";
    $dbuser ="root";
    $dbpassword="";
    $dbname="flashbet";

    $db = new mysqli($servername, $dbuser, $dbpassword, $dbname);

    if (isset($_POST['placeBet'])) {
        $username = mysqli_real_escape_string($db, $_SESSION['username']);
        $firstplace = mysqli_real_escape_string($db, $_POST['firstplace']);
        $secondplace = mysqli_real_escape_string($db, $_POST['secondplace']);
        $thirdplace = mysqli_real_escape_string($db, $_POST['thirdplace']);

        $query = "INSERT INTO bets (username, firstplace, secondplace, thirdplace) 
  			  VALUES('$username', '$firstplace', '$secondplace', '$thirdplace')";
        mysqli_query($db, $query);

        $query = "UPDATE users SET funds = funds-5";
        mysqli_query($db, $query);
        header('location: Bets.php');
    }