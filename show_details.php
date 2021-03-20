<table class="table table-hover">
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
	    <td><?php echo $row[3];?></td>
    <td><?php echo $row[4];?></td>
	  <td><?php echo $row[5];?></td>
	    <td><?php echo $row[6];?></td>
      <td><?php echo $row[7];?></td>
   
    </tr>
	   <?php } ?>
  </tbody>

</table>