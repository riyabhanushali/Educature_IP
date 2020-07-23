<?php

session_start();
header('location:login.html');

$con = mysqli_connect('localhost','root');

if($con){
	echo"connection successful";
}
else{
	echo"connection failed";
}

mysqli_select_db($con,'test');

$name = $_POST['username'];
$pass = $_POST['password'];
$tel = $_POST['pnum'];
$fname = $_POST['fullname'];
$email = $_POST['email'];

$q = "select * from user where username = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo" duplicate data ";
}
else
{
	$qy = "insert into user(fullname,username, email, password, pnum) values('$fname', '$name', '$email','$pass', $tel)";
	mysqli_query($con, $qy);
}mn




?>