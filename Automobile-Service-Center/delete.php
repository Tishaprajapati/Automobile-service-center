<?php

include "connection.php"; // Using database connection file here

$e_id = $_GET['e_id']; // get id through query string

$del = mysqli_query($conn,"delete from employe where e_id = '$e_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:Employee.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>