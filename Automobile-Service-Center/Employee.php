<?php
//session_start();
$conn = mysqli_connect('localhost','root','','service_center');
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
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
<body style="background-color:peachpuff;">


<center>
<div style="background-color: rgb(60, 179, 113); font-size: 50px; font-weight: 700">Employee Details</div>
<br><br>
<table border="1" style="background-color:white">
  <tr>
    <td>Emp ID</td>
    <td>Name</td>
    <td>Contact</td>
    <td>Service Location</td>
    <td>Salary</td>
    <td>Designation</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($conn,"select * from employe"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['e_id']; ?></td>
    <td><?php echo $data['e_name']; ?></td>
    <td><?php echo $data['e_contact']; ?></td>  
    <td><?php echo $data['service_location']; ?></td>
    <td><?php echo $data['salary']; ?></td>
    <td><?php echo $data['designation']; ?></td>    
    <td><a href="edit.php?e_id=<?php echo $data['e_id']; ?>">Edit</a></td>
    <td><a href="delete.php?e_id=<?php echo $data['e_id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</center>
<br>
<center> <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a></center>
<br>
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