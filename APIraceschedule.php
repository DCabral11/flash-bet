<?php
$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db= new mysqli($servername, $dbuser, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}

$str = file_get_contents("http://ergast.com/api/f1/2019/races.json");
$str=urldecode( $str);
$arr = json_decode($str, true);

print "<pre>";
$schedule_arr=$arr['MRData']['RaceTable']['Races'];

foreach($schedule_arr as $s) {
    $location = $s['raceName'];
    
    print "<br>";
    
    $locations = $db->real_escape_string($location);
   
    $sql = "insert into schedule(location) values('".$s["raceName"]."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
  }



?>