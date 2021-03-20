
<?php
include_once('db.php');
//$conn = mysqli_connect();
if(isset($_POST[`submit`]))
{
$user = $_POST['username'];
$pass = $_POST['password'];
//echo $name. " ".$pass;
$sql = "INSERT INTO `login`( `username`, `password`) VALUES ('$user','$pass')";

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
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Health Coach - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body>
 
             <div class="container">
            <form method="POST" name="appointment-form" id="appointment-form">
                <h2>ADD INFORMATION</h2>
                <div class="form-group-1">
                    <input type="text" name="Typesofbusiness" id="Typesofbusiness" placeholder="Types of business" required />
                    <input type="text" name="Tradedas" id="Tradedas" placeholder="Traded as" required />
                    <input type="text" name="Headquarters" id="Headquarters" placeholder="Headquarters" required />
                    <input type="text" name="founder" id="founder" placeholder="Owner/Founder" required />
					 <input type="text" name="revenue" id="revenue" placeholder="Revenue" required />
                    <input type="text" name="Operatingincome" id="Operatingincome" placeholder="Operating income" required />
                    <input type="text" name="Totalasset" id="Totalasset" placeholder="Total asset" required />
                    <input type="text" name="TotalEquality" id="TotalEquality" placeholder="Total Equality" required />
					
					 <input type="text" name="Employees" id="Employees" placeholder="Employees" required />
                    <input type="text" name="URL" id="URL" placeholder="URL" required />
					 <input type="date" name="AlexaRank" id="Alexa Rank" placeholder="Alexa Rank" required />
                    <input type="text" name="Advertising" id="Advertising" placeholder="Advertising" required />
                    <input type="date" name="Launced" id="Launced" placeholder="Launced" required />
          
             
                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="SUBMIT" />
                </div>
            </form>
        </div>

    </div>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  
    
  </body>
</html>