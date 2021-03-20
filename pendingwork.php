 <?php

include_once('db.php');
//$conn = mysqli_connect();
if(isset($_POST['submit']))
{
$Name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$charge = $_POST['charge'];
$days = $_POST['days'];



$sql = "INSERT INTO `getjob`( `Name`,`Email`,`Mobile`,`Charge`,`Days`) VALUES ('$Name','$email','$mobile','$charge','$days')";

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


<html>
<head>
<script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/styles.css" rel="stylesheet"/>
<link href="css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="js/jquery-1.11.2.min.js" ></script>
<script src="js/bootstrap.min.js"></script>
 <script s<?rc="js/jquery.dataTables.min.js" ></script>
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>FREELANCER- Free</title>
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

</script>
 	<style>
body {
  background-color:rgb(245,245,245);
}
     </style>
</head>
<?php
include_once('db.php');
?>
  <body>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus"></span> <a href="#"></a><span class="mailus"></span> <a href="#"></a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only"></i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only"></i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only"></i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only"></i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    			    	<a class="navbar-brand" href="index.html"><span>EMPLOYER<i class="fa fa-leaf"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="h1.php" class="nav-link">Home</a></li>
					 <li class="nav-item"><a href="getjob.php" class="nav-link">getjobs</a></li>
	        	<li class="nav-item"><a href="pends.php" class="nav-link">pending work</a></li>
				    	<li class="nav-item "><a href="" class="nav-link">work in progress </a></li>
					<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>


	</ul>
	      </div>
	 </div>
	   	 
	  </nav>
    <!-- END nav -->
	
		 <br>
		 <br>
		 <br>
		 	<div class="col-md-12">
		 <h1 style ="color:white;background-color:grey;text-align:center;"><b>BIDDING</b></h1>   
	 
		</div>

		 <br>
		 <br>

		 <center>
          <div class="col-md-12 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
			<div style="color:blue;" class="container">
		        <center>
                    <form action="" method="post">
              <h1 style ="color:blue;">Bidding</h1>
              <div>
                <input type="text" class="form-control" placeholder="Name" required="" name ="name" autocomplete="off"/>
              </div>
			  <br>
              
			  <div>
                <input type="text" class="form-control" placeholder="Email" required=""  name="email" autocomplete="off"/>
              </div>
			  <br>
			  <div>
                <input type="text" class="form-control" placeholder="Mobile" required=""  name="mobile" maxlength="10" autocomplete="off"/>
              </div>
			  			  <br>
			
	           <div>
                <input type="text" class="form-control" placeholder="Days" required=""  name="days" autocomplete="off"/>
              </div>
			  <br>
			  <div>
                <input type="text" class="form-control" placeholder="Charge" required=""  name="charge" autocomplete="off"/>
              </div>
			  			  <br>

              <div>

                <button class="btn btn-default submit"  href ="" name ="submit">Bidding</button>
       
              </div>

            </form>
			 </center>
    </div>
	    </div>
	    </div>
</center>

	
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