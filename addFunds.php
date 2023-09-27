<?php
include 'authentica.php';

$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db = new mysqli($servername, $dbuser, $dbpassword, $dbname);

if (isset($_POST['addFunds'])){
    if ($_SESSION['username']) {
        $sql = "SELECT * FROM users WHERE id = ".$_SESSION['id'];
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        $funds = $row['funds'];
    }

    $funds = mysqli_real_escape_string($db, $funds);   

    if (isset($_POST['onehundred'])) {
        $query = "UPDATE users SET funds= funds+100";
        mysqli_query($db, $query);
        header('location: profile.php');
    } elseif (isset($_POST['fivehundred'])) {
        $query = "UPDATE users SET funds= funds+500";
        mysqli_query($db, $query);
        header('location: profile.php');
    } elseif (isset($_POST['onethousand'])){
        $query = "UPDATE users SET funds= funds+1000";
        mysqli_query($db, $query);
        header('location: profile.php');
    }
}
?>