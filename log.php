
<?php
   session_start();


include_once('db.php');
//$conn = mysqli_connect();
if(isset($_POST['submit']))
{
$Email = $_POST['Email'];
$pass = $_POST['password'];
$uEmail= "select * from register where Email='$Email'&&password ='$pass'";

// storing email and password in a variable

$result = mysqli_query($conn, $uEmail);

$num = mysqli_num_rows($result);

// if email and password exist

if($num == 1)
{
	// storing session value
	$_SESSION['session_name'] = $Email;
		$_SESSION['session_name1'] = $Name;
	header('location:home11.php');
}
// if email or password do not exist
else{
	
	header('location:index.php');
}
}
?>