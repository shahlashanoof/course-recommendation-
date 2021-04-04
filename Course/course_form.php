<html>
<head>
<link rel="stylesheet" type="text/css" href="calendar/tcal.css" />
<script type="text/javascript" src="calendar/tcal.js"></script>
</head>
<form action="" method="post">
<table border="0" align="center" id="table">
<tr><th colspan="2">ADD A COURSE</th></tr>
<tr>
	<td>Course Title :</td>
	<td><input type="text" name="ctitle"  /></td>
</tr>

<tr>
	<td>Description :</td>
<td><textarea rows="5" cols="15" name="description"></textarea></td>
</tr>




<tr>
	<td colspan="2" align="right"><input type="submit" name="submit" value="Submit" id="button"/></td>
</tr>
</table>
</form>
</html>
<?php 
if(isset($_POST['submit']))
{
	$user=$_SESSION['user'];
	
include('../connection.php');
$query = "INSERT INTO course(college,name,description) VALUES('$user','$_POST[ctitle]','$_POST[description]')";
mysql_query($query) or die('Error: ' . mysql_error($con));

}
?>