
<?php

 session_start();
 header('location:register.php');
include_once('db.php');

if(isset($_POST['submit']))
{
     $Name = $_POST['name'];
     $Email = $_POST['Email'];
      $Mobile = $_POST['Mobile'];
       $pass = $_POST['password'];

$uEmail = "select * from register where Email = '$Email'";
$result = mysqli_query($conn,$uEmail);
$num = mysqli_num_rows($result);

if($num == 1) {
	echo "Emailid already taken.";
}

// inserting data into database
else{

$sql = "INSERT INTO `register`(`Name`,`Email`,`Mobile`,`password`) VALUES ('$Name','$Email','$Mobile','$pass')";
try{
    if(mysqli_query($conn,$sql))
  echo "<script>alert(registerded)</script>";
  else
  echo mysqli_error($conn);
  }
catch(Exception $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
} 
}

	   
	   
	   

//$sql = "INSERT INTO `register`(`Name`,`Email`,`Mobile`,`password`)VALUES('$name','$Email','$Mobile','$pass')";

/*try{
    if(mysqli_query($conn,$sql))
  echo "<script>alert(registered)</script>";
  else
  echo mysqli_error($conn);
  


}
catch(Exception $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}*/
?>