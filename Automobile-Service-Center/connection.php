<?php
$conn = mysqli_connect('localhost','root','','service_center');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>