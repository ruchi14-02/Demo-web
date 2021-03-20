
 <?php

include_once('conn.php');
//$conn = mysqli_connect();
if(isset($_POST['submit']))
{
$choosteproject = $_POST['chooseproject'];
$tellproject = $_POST['tellproject'];
$upload = $_POST['upload'];
$uploaded = $_POST['uploaded'];
$skills = $_POST['skills'];
$days = $_POST['days'];
$price = $_POST['price'];

$sql = "INSERT INTO `postjob`( `chooseproject`, `tellproject`,`upload`,`uploaded`,`skills`,`days`,`price`) VALUES ('$choosteproject','$tellproject','$upload','$uploaded','$skills','$days','$price $price ')";

try{
    if(mysqli_query($conn,$sql))
  echo "<script>alert(successful login)</script>";
  else
  echo mysqli_error($conn);
  


}
catch(Exception $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}

?>