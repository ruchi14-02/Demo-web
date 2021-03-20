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
<table class="table table-hover" border="2">
<div style="color:grey">
  <thead>

    <tr>
	
      <th scope="col">id</th>
	
      <th scope="col">project</th>
      <th scope="col">about</th>
	     <th scope="col">file</th>
      <th scope="col">file </th>
	  <th scope="col">skills</th>
	  <th scope="col">Days</th>
	  <th scope="col">price</th>
    </tr>
  </thead>
  </div>
  <tbody>
    <?php
    $sql = "SELECT * FROM postjob";
     $query = mysqli_query($conn,$sql) or die(mysqli_error());
     while($row = mysqli_fetch_array($query)){
         
     ?>
    <tr>
    <td><?php echo $row[0];?></td>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[2];?></td>
	      <td><?php include('show.php');?></td>
    <td><?php include('show.php');?></td>
	  <td><?php echo $row[5];?></td>
	    <td><?php echo $row[6];?></td>
      <td><?php echo $row[7];?></td>
   
    </tr>
	   <?php } ?>
  </tbody>

</table>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  		 <div class="footer" style="fixed">
	 <br>
  <center> <p>Copyright © 2011. Freelancer sites. All Rights Reserved.Designed & Developed by : divine infosec</p> </center>
</div>
    
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