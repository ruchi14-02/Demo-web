<?php
include_once('db.php');
//$conn = mysqli_connect();
if(isset($_POST['submit']))
{
$chooseproject = $_POST['chooseproject'];
$tellproject = $_POST['tellproject'];
$skills = $_POST['skills'];
$days = $_POST['days'];
$price = $_POST['price'];
$pname = rand(1000, 10000)."-".$_FILES['file']['name'];
$mname = rand(1000, 10000)."-".$_FILES['file']['name'];
		

		$temp_name = $_FILES['file']['tmp_name'];
$temp_name1 = $_FILES['file']['tmp_name'];
		

		$uploads_dir = 'uploads/';
$uploads_dir = 'uploads/';
		

		move_uploaded_file($temp_name, $uploads_dir.$pname);
		move_uploaded_file($temp_name1, $uploads_dir.$mname);

$sql = "INSERT INTO `postjob`( `chooseproject`, `tellproject`,`upload`,`uploaded`,`skills`,`days`,`price`) VALUES ('$chooseproject','$tellproject','$pname','$mname','$skills','$days','$price ')";

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
<html lang="en">
  <head>
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
<style>
body {
  background-color:rgb(245,245,245);
}
        
	
	</style>
	<style type="text/css">
  		input[type=text]{
  			width: 300px;
  		}
  	</style>
  </head>
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
	    		<a class="navbar-brand" href="index.html"><span>FREELANCER<i class="fa fa-leaf"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="h2.php" class="nav-link">Home</a></li>
					 <li class="nav-item"><a href="postjob.php" class="nav-link">post jobs</a></li>
	        	<li class="nav-item"><a href="myproject.php" class="nav-link">My project</a></li>
				    	<li class="nav-item "><a href="pend.php" class="nav-link">pending jobs </a></li>
					 <li class="nav-item"><a href="" class="nav-link">confirm bids</a></li>
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
		 <h1 style ="color:white;background-color:grey;text-align:center;"><b>FREELANCER</b></h1>   
	 
		</div>

		 <br>
		 <br>

	
		 <center>
          <div class="col-md-6 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
			<div style="color:blue;" class="container">
			<center>
                    <form action="" method="post" enctype="multipart/form-data">
              <h1 style ="color:blue;">post</h1>
              <div>
                <input type="text" class="form-control" placeholder="Choose name of your project" required="" name ="chooseproject" autocomplete="off"/>
              </div>
			  <br>
              
			  <div>
                <input type="text" class="form-control" placeholder="Tell us about your project" required=""  name="tellproject" autocomplete="off"/>
              </div>
			  <br>
				<div><input type="file"name="file" multiple ></div><br><br>
		      <div><input type="file" name="file" multiple ></div>
			  <br>
			  <div>
                <input type="text" class="form-control" placeholder="What skills are required" required=""  name="skills" autocomplete="off"/>
              </div>
			  <br>
			  <div>
                <input type="text" class="form-control" placeholder="Days" required=""  name="days" autocomplete="off"/>
              </div>
			  <br><div>
                <input type="text" class="form-control" placeholder="Price" required=""  name="price" autocomplete="off"/>
              </div>
			  			  <br>
              <div>
                <button class="btn btn-default submit"  href ="" name ="submit">Post job</button>
       
              </div>

            </form>
			</center>
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