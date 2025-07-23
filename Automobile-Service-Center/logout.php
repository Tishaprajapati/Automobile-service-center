<?php
session_start();
unset($_SESSION['USER_LOGIN']);
unset($_SESSION['c_name']);;
unset($_SESSION['c_id']);
header('location:index.php');
?>