

<?php
require_once('connection.php');

if (isset($_POST['c_id']) && !empty($_POST['c_id']) && isset($_POST['v_no']) && !empty($_POST['v_no']) && isset($_POST['v_name']) && !empty($_POST['v_name']) && isset($_POST['v_type']) && !empty($_POST['v_type']) &&  isset($_POST['RC_No']) && !empty($_POST['RC_No'])){
    //Stores Values in Variable
    $c_id = mysqli_real_escape_string($conn, $_POST['c_id']);
	$v_no = mysqli_real_escape_string($conn, $_POST['v_no']);
	$v_name = mysqli_real_escape_string($conn, $_POST['v_name']);
    $v_type = mysqli_real_escape_string($conn, $_POST['v_type']);
    $RC_No = mysqli_real_escape_string($conn, $_POST['RC_No']);

  //  $c_contact = mysqli_real_escape_string($conn, $_POST['c_contact']);
    
	$insertq = mysqli_query($conn, "insert into vehicle (`v_no`,`c_id`,`v_name`,`RC_No`) "
                . "values ('{$v_no}','{$c_id}','{$v_name}', '{$RC_No}')") or die(mysqli_error($conn));

                if($insertq) 
                {
					$response['flag'] = 1;
					//Messege for Succesfully Registration....
					echo '<div style="background-color:#52b350; padding:10px; font-size:26px; weight:500;"><center>Vehicle Registered Succesfully.</center></div>';

					// $message="Welcome to our Website..."."<br><br><br>"."Your Customer ID:".$lastinsertid."<br>"
					// ."Your Name:".$c_name."<br>"."Customer Age:".$c_age."<br>";
				}else {
						echo "Please Try Again Something Went Wrong";
						}   

                       // $insert_veh_type = mysqli_query($conn, "insert into vehicle_type('v_name', 'v_type')" 
                        //. "values('{$v_name}', '{$v_type}')") or die(mysqli_error($conn))

                    }			
		
?>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="vehicle.css" rel="stylesheet" type="text/css" />
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
<div style="background-color: rgb(60, 179, 113); font-size: 50px; font-weight: 700">Do Register Your Vehicle here</div>
</center>
<form method="POST">

<!-- <div class="imgcontainer">
    <img src="veh1.jpeg" alt="Avatar" class="avatar">
  </div> -->

  <!-- <div class="imgcontainer">
    <img src="login.jpg" height="2%" width="2%" alt="Avatar" class="avatar">
  </div> -->
<br><br><br>
  <div class="container">
    <!-- <label for="uname"><b>Name</b></label> -->
    <input type="text" placeholder="Enter Customer id" name="c_id" required>

    <!-- <label for="uage"><b>Age</b></label> -->
    <input type="text" placeholder="Enter Vehicle Number" name="v_no" required>

    <!-- <label for="uadd"><b>Address</b></label> -->
    <input type="text" placeholder="Enter Vehicle Name" name="v_name" required>

    <!-- <label for="uc"><b>Contact Number</b></label> -->
     <input type="text" placeholder="Enter Vehicle Type" name="v_type" required>

    <!-- <label for="uc1"><b> Other Contact</b></label>
    <input type="text" placeholder="Enter another contact" name="uc1"> -->

    <!-- <label for="uem"><b>Email</b></label> -->
    <input type="text" placeholder="Enter your RC Book Number" name="RC_No" required>
        
    
    <button type="submit" name="lOgin" >Submit</button>
    <!-- <span class="psw">Already have an account? <a href="login1.php">Sign in</a></span><br><br>
  </div><br><br> -->    
  <!-- ERROR IN SPAN -->

  <span class="psw"> <a href="login1.php"></a></span><br><br>
  </div>
  <br><br><br>
  <center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" >Cancel</button>
    <span class="psw">Forgot <a href="forgot1.php">password?</a></span>
  </div> -->
  
</form>

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