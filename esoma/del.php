<?php
session_start();
$code=$_SESSION["code"];

$id=$_GET['delnum'];

$db=mysqli_connect("localhost","root","","filesearch");

if ($code=="Mathematics") {
	mysqli_query($db,"DELETE FROM `math` WHERE `id`='$id'");
}
elseif ($code=="English") {
	mysqli_query($db,"DELETE FROM `english` WHERE `id`='$id'");
}
elseif ($code=="Kiswahili") {
	mysqli_query($db,"DELETE FROM `kiswahili` WHERE `id`='$id'");
}
elseif ($code=="Science") {
	mysqli_query($db,"DELETE FROM `marklist` WHERE `id`='$id'");
}
else{
	mysqli_query($db,"DELETE FROM `socialstudies` WHERE `id`='$id'");
}

header("location:setting.php");

?>