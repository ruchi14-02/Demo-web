<?php 

//starts session
session_start();

//destroy session
session_destroy();

// sending to login page after logout
header('location:home11.php');

 ?>