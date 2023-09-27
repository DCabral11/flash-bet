<?php
$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db= new mysqli($servername, $dbuser, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}

$str = file_get_contents("http://ergast.com/api/f1/2019/driverstandings.json");
$str=urldecode( $str);
$arr = json_decode($str, true);   

print "<pre>";
$drvstd_arr=$arr['MRData']['StandingsTable']['StandingsLists'][0]['DriverStandings'];

foreach($drvstd_arr as $drvstd) {
    $position = $drvstd['position'];
    $drivername = $drvstd['Driver']['givenName']. " " . $drvstd['Driver']['familyName'];
    print "<br>";

    $name = $db->real_escape_string($drivername);
    
    $sql = "insert into standings(driver) values('".$drvstd['Driver']['givenName'].$drvstd['Driver']['familyName']."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
  }

?>