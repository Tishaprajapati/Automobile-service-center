



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="login1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<style>
.foot .media-icons a{
            color: white;
            font-size: 25px;
            margin-right: 30px;
        }

</style>
</head>
<body>
<center>
<h2>Check Slot Availability</h2>
</center>
<form method="POST">
  <div class="imgcontainer">
    <img src="login11.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <!-- <label for="uname"><b>Username</b></label> -->
    <!-- <label for="uname"><b></b></label> -->
    <input type="text" placeholder="Enter Location id" name="loc_id" required>

    <!-- <label for="psw"><b>Password</b></label> -->
    <!-- <label for="psw"><b></b></label> -->
<br> <br>
    <input type="text" placeholder="Enter Your Vehicle Type" name="v_type" required>
    <!-- <label for="cars">Choose a Vehicle Type:</label>
<select id="cars" name="v_type">
  <option value="volvo">Car</option>
  <option value="saab">Bike</option>
  <option value="fiat">Van</option>
  <option value="audi">Taxi</option>
  <option value="volvo">Scooter</option>
  <option value="saab">Truck</option>
  <option value="fiat">Bus</option>
  <option value="audi">Tractor</option>
</select>   -->

<br> <br>
    <!-- <button type="submit" name="login" >Login</button> -->
    <br>
    
    <button type="submit" name="Check" >Check</button>
    <!-- <span class="psw"> <a href="forgot1.php">Forgot your password?</a></span><br><br> -->

  
</form>
<center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>




<?php
require_once('connection.php');

if(isset($_POST['Check']))
{
    $loc_id = mysqli_real_escape_string($conn, $_POST['loc_id']);
	$v_type = mysqli_real_escape_string($conn, $_POST['v_type']);


   $result = mysqli_query($conn, "SELECT * from slot where loc_id ='$loc_id' and v_type = '$v_type' ");
    $row = mysqli_fetch_assoc($result);

       // echo $row['availability'] ;
	   if($row['availability'] == 'YES') echo '<div class="alert alert-primary" role="alert" style="margin-top:10px; padding:20px;background-color:rgba(255,0,0,0.5);letterspacing:2; ">
	   <h1><center>Yes! Slot is Available</center></h1> </div>';
	   else echo '<div class="alert alert-primary" role="alert" style="margin-top:10px; padding:20px;background-color:rgba(255,0,0,0.5);letterspacing:2; ">
	   <h1><center>Opss! Slot is Not Available</center></h1> </div>';
    
} 
// else {
//   echo "Please Try Again Something Went Wrong";
//    } 

?>

<!-- <footer>
		<div class="foot" style="width:100%; background:#000000; color:#ffffff; padding:8px; text-align:center;">
			<p>Coprights @Service center.All Rights Reserverd | Cotact Us:+91 1234567890</p>
			<div class="media-icons">
			<a target="_blank" href="https://www.facebook.com/zenisha.savaliya.9"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/__zenisha____/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/zenisha-s-a74a51204/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
</footer> -->
</body>
</html>