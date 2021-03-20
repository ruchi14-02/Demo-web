<?php
$files = scandir("uploads");
  {

	  ?>
	  <a href="uploads/<?php echo $files[$a]?>">Download</a>
<?php	  
  }


?>