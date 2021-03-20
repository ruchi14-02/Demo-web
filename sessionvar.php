<?php

   session_start();
   include('db.php');
    $Name = $_POST['name'];
	
$uName = " select * from register where Name=$Name ";
$result = mysqli_query($conn,$uName);
$num = mysqli_num_rows($result); 
$_SESSION['session_name'] = $Name;
	
?>
<html>
<head>
</head>
<body>
<h1>Hi <?php echo $_SESSION['session_name'] ?>, Welcome</h1>
</body>
</html>