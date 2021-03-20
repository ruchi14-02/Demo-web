<?php 

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<a href="logout.php">Logout</a>

	<h1>Hi <?php echo $_SESSION['session_name'] ?>, Welcome to your home page.</h1>

</body>
</htm