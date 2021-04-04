<?php
$j_id = $_REQUEST['id'];
$con = mysqli_connect("localhost","root","","form");
$query = "DELETE FROM job_details WHERE J_id = '$j_id'";
if (!mysqli_query($con,$query))
  {
  	die('Error: ' . mysqli_error($con));
  }
else
{   
	echo "Selected Vacency has been Deleted Successfully";
}
?>