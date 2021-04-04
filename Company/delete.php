<?php
$c_id = $_REQUEST['id'];
$con = mysqli_connect("localhost","root","","form");
$query = "DELETE FROM company_details WHERE C_id = '$c_id'";
if (!mysqli_query($con,$query))
  {
  	die('Error: ' . mysqli_error($con));
  }
else
{   
	echo "Company Who's Id = $c_id is Deleted Successfully";
}
?>