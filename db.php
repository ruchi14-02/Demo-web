<?php
$server="localhost";
$user="root";
$password="";
$dbname="mine"; 

/*try
{
$conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "connected";
}
catch(PDOException $e)
{
	echo $e->getMessage();
	//var_dump($e);
	
}*/
$conn = mysqli_connect($server,$user,$password,$dbname);
if($conn) echo "";
else echo "ERROR IN DB";
?>