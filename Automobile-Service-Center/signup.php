
<?php
require_once('connection.php');

if (isset($_POST['c_name']) && !empty($_POST['c_name']) && isset($_POST['c_age']) && !empty($_POST['c_age']) && isset($_POST['c_address']) && !empty($_POST['c_address']) && isset($_POST['c_contact']) && !empty($_POST['c_contact']) &&  isset($_POST['c_email']) && !empty($_POST['c_email'])){
    //Stores Values in Variable
    $c_name = mysqli_real_escape_string($conn, $_POST['c_name']);
	$c_age = mysqli_real_escape_string($conn, $_POST['c_age']);
	$c_address = mysqli_real_escape_string($conn, $_POST['c_address']);
    $c_email = mysqli_real_escape_string($conn, $_POST['c_email']);
    
	$insertquery = mysqli_query($conn, "insert into customer (`c_name`,`c_age`,`c_address`,`c_email`) "
                . "values ('{$c_name}','{$c_age}','{$c_address}', '{$c_email}')") or die(mysqli_error($conn));

	//Below Function will Give you last Inserted Record ID
	$lastinsertid = mysqli_insert_id($conn);

  // $insert_contact = mysqli_query($conn, "insert into contacts ('c_id''c_contact')" 
  // . "values('{$lastinsertid}','{$c_contact}')") or die(mysqli_error($conn));

				if ($insertquery) {
					$response['flag'] = 1;
					//Messege for Succesfully Registration....
					echo '<div style="background-color:#52b350; padding:10px; font-size:26px; weight:500;"><center>Registered Succesfully.</center></div>';
					//echo '<div style="padding:10px; font-size:26px; weight:500;"><center> Your Customer ID: $lastinsertid </center></div>';
 echo "Your Customer id: " .$lastinsertid;
//  echo '<center>Your Customer id:</center>'  .$lastinsertid;
					// $message="Welcome to our Website..."."<br><br><br>"."Your Customer ID:".$lastinsertid."<br>"
					// ."Your Name:".$c_name."<br>"."Customer Age:".$c_age."<br>";

				

				}else {
						echo "Please Try Again Something Went Wrong";
						}
					}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="signup.css" rel="stylesheet" type="text/css" />
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
<div style="background-color: rgb(60, 179, 113); font-size: 50px; font-weight: 700">Do Sign up here</div>
</center>
<form method="POST">
  <!-- <div class="imgcontainer">
    <img src="veh1.jpeg" height="2%" width="2%" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    <!-- <label for="uname"><b>Name</b></label> -->
    <input type="text" placeholder="Enter First name" name="c_name" required>

    <!-- <label for="uage"><b>Age</b></label> -->
    <input type="text" placeholder="Enter Age" name="c_age" required>

    <!-- <label for="uadd"><b>Address</b></label> -->
    <input type="text" placeholder="Enter Address with state and pincode" name="c_address" required>

    <!-- <label for="uc"><b>Contact Number</b></label> --> 
     <input type="text" placeholder="Enter Contact number" name="c_contact" required>

    <!-- <label for="uc1"><b> Other Contact</b></label>
    <input type="text" placeholder="Enter another contact" name="uc1"> -->

    <!-- <label for="uem"><b>Email</b></label> -->
    <input type="text" placeholder="Enter Email" name="c_email" required>
        
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br><br>
    <button type="submit" name="login" >Sign up</button>
    <span class="psw">Already have an account? <a href="login1.php">Sign in</a></span><br><br>
  </div>
 
  <center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>
<br>
  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" >Cancel</button>
    <span class="psw">Forgot <a href="forgot1.php">password?</a></span>
  </div> -->
</form>
<br><br>
<footer>
		<div class="foot" style="width:100%; background:#000000; color:#ffffff; padding:8px; text-align:center;">
			<p>Coprights @service center.All Rights Reserverd | Cotact Us:+91 1234567890</p>
			<div class="media-icons">
			<a target="_blank" href="https://www.facebook.com/zenisha.savaliya.9"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/__zenisha____/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/zenisha-s-a74a51204/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
</footer>
</body>
</html>
