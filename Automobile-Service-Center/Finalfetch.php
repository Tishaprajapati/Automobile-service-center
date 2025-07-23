
<?php
session_start();
require('connection.php');
if(isset($_POST['lOgin']) ){
	$c_id=$_POST['c_id'];
}
// 	else{
// 		echo '<div class="alert alert-primary" role="alert" style="margin-top:10px; padding:20px;background-color:rgba(255,0,0,0.5);letterspacing:2; ">
// 		<h1><center>You have not registered yet.<br><a href="signup.php">Click Here</a> to Register.</center></h1>
// </div>';
// 	}
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
<h2>Enter Customer ID and see your Vehicle Details</h2>
</center>


<form method="POST">
  <!-- <div class="imgcontainer">
    <img src="login11.png" alt="Avatar" class="avatar">
  </div> -->
  <br><br>
  <div class="container">
    <!-- <label for="uname"><b>Username</b></label> -->
    <label for="uname"><b></b></label>
    <input type="text" placeholder="Enter Customer id" name="c_id" required><br>
    <button type="submit" name="lOgin" >Get data</button>
 <center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>
<br><br>
<span class="psw"> <a href="login1.php"></a></span><br><br>
  </div>
</form>
<center>
<table class="table" >
        <thead style="border: 5px black">
            <tr>
                <th scope="col">Vehicle Number    </th>
                <th scope="col">Vehicle Name     </th>
                <th scope="col">RC Book Number   </th>
            </tr>
        </thead>
        <tbody>
            <?php
    include('connection.php');
    $query = mysqli_query($conn,"select * from vehicle where c_id='$c_id'");

    while($inx=mysqli_fetch_assoc($query))
    {
    ?>
            <tr>
                <td> <?php echo $inx['v_no']; ?> </td>
                <td><?php echo $inx['v_name'];?></td>
                <td><?php echo $inx['RC_No'];?></td>
            </tr>
            <?php
        }
?>
        </tbody>
    </table>
    </center>

<br><br><br><br><br><br><br><br>

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