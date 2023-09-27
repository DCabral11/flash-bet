<?php
$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db= new mysqli($servername, $dbuser, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}

$str = file_get_contents("http://ergast.com/api/f1/2019/results.json");
$str=urldecode( $str);
$arr = json_decode($str,true);


print "<pre>";
$results_arr=$arr['MRData']['RaceTable']['Races'][0]['Results'];
$results_arr2=$arr['MRData']['RaceTable']['Races'][1]['Results'];
//$results_arr3=$arr['MRData']['RaceTable']['Races'][2]['Results'];
//$results_arr4=$arr['MRData']['RaceTable']['Races'][3]['Results'];
//$results_arr5=$arr['MRData']['RaceTable']['Races'][4]['Results'];
//$results_arr6=$arr['MRData']['RaceTable']['Races'][5]['Results'];
//$results_arr7=$arr['MRData']['RaceTable']['Races'][6]['Results'];
//$results_arr8=$arr['MRData']['RaceTable']['Races'][7]['Results'];
//$results_arr9=$arr['MRData']['RaceTable']['Races'][8]['Results'];
//$results_arr10=$arr['MRData']['RaceTable']['Races'][9]['Results'];
//$results_arr11=$arr['MRData']['RaceTable']['Races'][10]['Results'];
//$results_arr12=$arr['MRData']['RaceTable']['Races'][11]['Results'];
//$results_arr13=$arr['MRData']['RaceTable']['Races'][12]['Results'];
//$results_arr14=$arr['MRData']['RaceTable']['Races'][13]['Results'];
//$results_arr15=$arr['MRData']['RaceTable']['Races'][14]['Results'];
//$results_arr16=$arr['MRData']['RaceTable']['Races'][15]['Results'];
//$results_arr17=$arr['MRData']['RaceTable']['Races'][16]['Results'];
//$results_arr18=$arr['MRData']['RaceTable']['Races'][17]['Results'];
//$results_arr19=$arr['MRData']['RaceTable']['Races'][18]['Results'];
//$results_arr20=$arr['MRData']['RaceTable']['Races'][19]['Results'];
//$results_arr21=$arr['MRData']['RaceTable']['Races'][20]['Results'];

//print_r($results_arr);
$circuit_arr= $arr['MRData']['RaceTable']['Races'][0]['Circuit']['Location']['country'];
print $circuit_arr."<br>";;
//foreach($arr as $line)

foreach($results_arr as $r) {
    $driverposition = "position: ". $r['position']. "; " ."points: ". $r['points'];
    $drivername = "Driver :".$r['Driver']['givenName']. " " . $r['Driver']['familyName']."; ";
    print "<br>";

    $name = $db->real_escape_string($drivername);

    $sql = "insert into resultsaustralia(points, driver) values('".$r['points']."', '".$r['Driver']['givenName'].$r['Driver']['familyName']."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
}

print "<br>";
print "<br>";

$circuit_arr= $arr['MRData']['RaceTable']['Races'][1]['Circuit']['Location']['country'];
print $circuit_arr."<br>";

foreach($results_arr2 as $r) {
    $position ="position: ". $r['position']. "; " ."points: ". $r['points'];
    $name = "Driver :".$r['Driver']['givenName']. " " . $r['Driver']['familyName']."; ";
    $number= "number: ".$r['number'];
    print "<br>";

    $driverposition = "position: ". $r['position']. "; " ."points: ". $r['points'];
    $drivername = "Driver :".$r['Driver']['givenName']. " " . $r['Driver']['familyName']."; ";
    print "<br>";

    $name = $db->real_escape_string($drivername);

    $sql = "insert into resultsbahrain(points, driver) values('".$r['points']."', '".$r['Driver']['givenName'].$r['Driver']['familyName']."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
}
?>