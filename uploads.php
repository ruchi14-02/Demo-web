<?php 

	$localhost = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'mine';

	$conn = mysqli_connect($localhost, $username, $password, $db);

	if($conn) {
		echo "";
	}

	else{
		echo "Not Well!";
	}

	if(isset($_POST['submit'])){

		//file title 

		$title = $_POST['title'];

		$pname = rand(1000, 10000)."-".$_FILES['file']['name'];

		// temporary file name

		$temp_name = $_FILES['file']['tmp_name'];

		// upload directory path

		$uploads_dir = 'uploads/';

		// moving file to directory

		move_uploaded_file($temp_name, $uploads_dir.$pname);

		// sql query to insert into database

		$query = "insert into upload_files(title, image) VALUES ('$title', '$pname')";
		$result = mysqli_query($conn, $query);

		if($result) {
			echo "File uploaded successfully.";
		}

		else{
			echo "File upload failed.";
		}




	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data" action="home.php">
		<label>Title</label>
		<input type="text" name="title">
		<label>File Upload</label>
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload!">
	</form>

</body>
</html>
