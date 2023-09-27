<?php
$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db= new mysqli($servername, $dbuser, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}

$str = file_get_contents("http://ergast.com/api/f1/2019/drivers.json");
$str=urldecode( $str);
$arr = json_decode($str, true);   

print "<pre>";
$drvs_arr=$arr['MRData']['DriverTable']['Drivers'];

foreach($drvs_arr as $drv) {
    $drivername = $drv['givenName'];
    $driversurname = $drv['familyName'];
    $drivernationality = $drv['nationality'];
    print "<br>";
    
    $name = $db->real_escape_string($drivername);
    $surname = $db->real_escape_string($driversurname);
    $nationality = $db->real_escape_string($drivernationality);
    
    $sql = "insert into drivers(name, surname, nationality) values('".$drv["givenName"]."', '".$drv["familyName"]."', '".$drv["nationality"]."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
  }
?>