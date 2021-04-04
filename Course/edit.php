<html>
<head>
<link rel="stylesheet" type="text/css" href="calendar/tcal.css" />
<script type="text/javascript" src="calendar/tcal.js"></script>
</head>
<?php
$j_id = $_REQUEST['id'];
include('../connection.php');
?>


<?php
if(isset($_POST['submit']))
{
	$jobtitle = $_POST['jobtitle'];
	
	$jobdesc = $_POST['job_desc'];
	;
	
	
    $query = "UPDATE course SET name = '$jobtitle',description = '$jobdesc' WHERE id = '$j_id'" ;
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error($con));
  }
else
{   }
}





$result = mysql_query("SELECT * FROM course WHERE id = '$j_id'");
$row = mysql_fetch_array($result);
?>
<form name="f1" action="" method="post" >
<table align="center" id="table">
<tr><th colspan="2">Edit Entered Course</th></tr>
<tr>
	<td>Job Title :</td>
	<td><input type="text" name="jobtitle" value="<?php echo $row['name'] ?>"  /></td>
</tr>

<tr>
	<td> Describtion :</td>
	<td><textarea rows="5" cols="15" name="job_desc"><?php echo $row['description']; ?></textarea></td>
</tr>



<tr>
    <td colspan="2" align="right">&nbsp;<input name="submit" type="submit" value="Update" id="button" />
	</td>
</tr>
</table>
</form>

