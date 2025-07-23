<?php
session_start();
?>



<html>
<head>
<title>Welcome To our Website</title>
<link href="index.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<nav class="navbar">
	<ul class="web-site-name">
	
	
		<li class="link">
			<a href="signup.php">Sign Up</a>
		</li>
		
		<li class="link">
			 <!-- <a href="login1.php">Login</a> -->
			<?php
		if(isset($_SESSION['USER_LOGIN'])){
		echo '<a href="logout.php" target="_blank">Logout</a>';
		}
		else{
			echo '<a href="login1.php" target="_blank">Login</a>';
		}
		?>
		</li>	
			
		<li class="link">
			<a href="vehicle.php">Vehicle</a>
		</li>	

		<li class="link">
			<a href="Finalfetch.php">Vehicle records</a>
		</li>	

		<li class="link">
			<a href="Employee.php">Employee</a>
		</li>	


	</ul>
</nav>

<h1 style="color: green; margin-left: 15px ">   Ignition Automobile Service Center</h1>




<div class="content">
	<div class="image">
	   <div class="info">
       <img src="img1.png" style="float: left; height: 430; width:430">
           <center>
            <div class="box">
              <div class="contents">
              <b style="font-size: 50px"><i> Providing Best Automobile service <br> for years.. </i></b> <br><br>
              Check availability and book a slot now<br><br>
              Thank you for stepping by<br>
              
            </div>
            </div>
          <br><br>
				<a href="slot.php"class="button">Book a slot</a>
             </center>
        </div>
	</div>	


	

	<!-- <div class="catagories" id="catagories">
	<h1 class="cat">Services</h1>
		<div class="items">
			<a href="electronics.php">
			<div class="caption">
				<h2>Cleaning</h2>
				<img src="cleaning.jpg" style="width: 360;" class="thumbnail">
				<p>All types of vehicle washing availabile</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="clothes.php">
			<div class="caption">
				<h2>Coolant</h2>
			    <img src="coolant.jpg" style="width: 360;" class="thumbnail">
				<p>Coolant service and maintainence</p>
			</div>	
			</a>
		</div>
		<div class="items">
			<a href="jewellery.php">
			<div class="caption">
				<h2>Breakdown service & more</h2>
				<img src="abc.jpeg" style="width: 360;" class="thumbnail">
				<p>Emrgency breakdown service & more..</p>
			</div>	
			</a>
		</div>
	</div>
</div>
 -->


<center>
<!-- <footer>
		<div class="container">
			<p>Copyrights @Service Center.All Rights Reseverd | Contact Us:+91 1234567890</p>
		</div>
</footer> -->
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
</center>
</body>
</html>
