<?php

include "connection.php"; // Using database connection file here

// $e_id = $_GET['e_id']; // get id through query string
$e_id = mysqli_real_escape_string($conn, $_GET['e_id']);
$qry = mysqli_query($conn,"select * from employe where e_id='$e_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $e_name = $_POST['e_name'];
    $e_contact = $_POST['e_contact'];
	$service_location = $_POST['service_location'];
    $edit = mysqli_query($conn,"update employe set e_name='$e_name', e_contact='$e_contact' , service_location = '$service_location' where e_id='$e_id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:Employee.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="edit.css" rel="stylesheet" type="text/css" />
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
<div style="background-color: rgb(60, 179, 113); font-size: 50px; font-weight: 700">Update Data</div><center>
<br><br><br><br>

<center>

<form method="POST">
<div class="container1">
<center><input type="text" name="e_name" value="<?php echo $data['e_name'] ?>" placeholder="Enter Name" Required></center>
  <input type="text" name="e_contact" value="<?php echo $data['e_contact'] ?>" placeholder="Enter Contact Number" Required>
  <input type="text" name="service_location" value="<?php echo $data['service_location'] ?>" placeholder="Enter Current service location" Required>
  <input type="submit" name="update" value="Update">
  <span class="psw"> <a href="login1.php"></a></span><br><br>
    </div>

  <a href="index.php" style="text-decoration: none; color: black; font-size: 10px;">Back to Homepage</a>
</form>


</center>

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


