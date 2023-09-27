<?php

$link = mysqli_connect('localhost', 'root', '', 'flashbet') or die("Não ligou");

session_start();

if (@$_REQUEST['logout']) {
	logout();
}

if (@$_POST['username'] && @$_POST['password']){

	$uuser = mysqli_real_escape_string($link, $_POST['username']);
	$upass = mysqli_real_escape_string($link, $_POST['password']);
	
    $sql="SELECT id FROM users WHERE password='$upass' AND username='$uuser'";
	$result = mysqli_query($link, $sql);
	$num = mysqli_num_rows($result);

	if ($num == 0) {
		form_login();
		exit; 
	} else {
		$row = mysqli_fetch_array($result);
		$_SESSION['username'] = $uuser;
		$_SESSION['id'] = $row['id'];
	}
	
} else if (!@isset($_SESSION['username'])) {  
	form_login();
	exit;   
}


function form_login(){
	header("Location: login.php");
}


function logout(){	
	unset($_SESSION['username']);
	header("Location: index.php");
	exit;
}
?>