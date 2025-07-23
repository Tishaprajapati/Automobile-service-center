
<?php
session_start();
require('connection.php');
if(isset($_POST['login']) ){
	$c_name=$_POST['c_name'];
	$c_id=$_POST['c_id'];
	//$username=mysqli_real_escape_string($conn,$_POST['uname']);
	//$password=mysqli_real_escape_string($conn,$_POST['psw']);
	// $sql="select * from customer where c_name='{$c_name}' and c_id='{$c_id}' ";
  $sql="select * from customer where 'c_name' = '{$c_name}' and c_id='{$c_id}' ";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($res);
	$count=mysqli_num_rows($res);
	//$username=$row['username'];
	//$password=$row['password'];
	if($count==1){
		$_SESSION['USER_LOGIN']='yes';
		$_SESSION['c_name']=$row['c_name'];
		$_SESSION['c_id']=$row['c_id'];
		
		//if($res){
		
		header('location:index.php');
		//}
		}
	else{
		echo '<div class="alert alert-primary" role="alert" style="margin-top:10px; padding:20px;background-color:rgba(255,0,0,0.5);letterspacing:2; ">
		<h1><center>You have not registered yet.<br><a href="signup.php">Click Here</a> to Register.</center></h1>
</div>';
	}
}
?>





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
<h2>Login to your account</h2>
</center>
<form method="POST">
  <div class="imgcontainer">
    <img src="login11.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <!-- <label for="uname"><b>Username</b></label> -->
    <label for="uname"><b></b></label>
    <input type="text" placeholder="Enter Username" name="c_name" required>

    <!-- <label for="psw"><b>Password</b></label> -->
    <label for="psw"><b></b></label>
    <input type="password" placeholder="Enter customer id" name="c_id" required>
        
    <!-- <button type="submit" name="login" >Login</button> -->
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br><br>
    <button type="submit" name="login" >Login</button>
    <!-- <span class="psw"> <a href="forgot1.php">Forgot your password?</a></span><br><br> -->
    <span class="psw">Don't have an account? <a href="signup.php">Sign up</a></span><br><br>
  </div>
 <center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>
<br><br>

  <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn" >Cancel</button>
    <span class="psw">Forgot your <a href="forgot1.php">password?</a></span>
  </div> -->
  
</form>
<footer>
		<div class="foot" style="width:100%; background:#000000; color:#ffffff; padding:8px; text-align:center;">
			<p>Coprights @Service center.All Rights Reserverd | Cotact Us:+91 1234567890</p>
			<div class="media-icons">
			<a target="_blank" href="https://www.facebook.com/zenisha.savaliya.9"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://www.instagram.com/__zenisha____/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.linkedin.com/in/zenisha-s-a74a51204/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
</footer>
</body>
</html>