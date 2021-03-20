 <?php

include_once('conn.php');
//$conn = mysqli_connect();
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$doc_app = $_POST['ddldocapp'];
$payment = $_POST['ddlpayment'];



$sql = "INSERT INTO `postjob`( `fname`, `lname`,`Email`,`Contact`,`docapp`,`payment`) VALUES ('$fname','$lname','$email','$contact','$doc_app','$payment')";

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