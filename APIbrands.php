<?php
$servername="localhost";
$dbuser ="root";
$dbpassword="";
$dbname="flashbet";

$db= new mysqli($servername, $dbuser, $dbpassword, $dbname);

if($db->connect_error){
    die("Connection failed: ". $db->connect_error);
}

$str = file_get_contents("http://ergast.com/api/f1/2019/constructors.json");
$str = urldecode( $str);
$arr = json_decode($str, true);

print "<pre>";
$brand_arr = $arr['MRData']['ConstructorTable']['Constructors'];

foreach($brand_arr as $brand) {
    $brandname = $brand['name'];
    $brandnationality = $brand['nationality'];
    print "<br>";
    
    $name = $db->real_escape_string($brandname);
    $nationality = $db->real_escape_string($brandnationality);
   
    $sql = "insert into brands(name, nationality) values('".$brand["name"]."', '".$brand["nationality"]."')";

    if ($db->query($sql) === TRUE) {
      echo "Data added succesfully";		
    } else {
      echo "Error: " . $db->error;
    }
}
?>