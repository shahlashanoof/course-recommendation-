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
	$close = $_POST['close'];
	$email = $_POST['email'];
	$jobdesc = $_POST['job_desc'];
	$skills = $_POST['skills'];
	$exp = $_POST['experience'];
		$vacancy = $_POST['vacancy'];
			$qualification = $_POST['qualification'];
				$place_vacant = $_POST['place_vacant'];
					$place_interview = $_POST['place_interview'];
		$interview_time = $_POST['interview_time'];
		$salary=$_POST['salary'];
	
	
    $query = "UPDATE job_details SET J_title = '$jobtitle', J_close = '$close', J_email = '$email', J_description = '$jobdesc', J_skills = '$skills', J_experience = '$exp', vacancy = '$vacancy', qualification = '$qualification', place_vacant = '$place_vacant', place_interview = '$place_interview', interview_time = '$interview_time',salary='$salary' WHERE J_id = '$j_id'" ;
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error($con));
  }
else
{   }
}





$result = mysql_query("SELECT * FROM job_details WHERE J_id = '$j_id'");
$row = mysql_fetch_array($result);
?>
<form name="f1" action="" method="post" >
<table align="center" id="table">
<tr><th colspan="2">Edit Entered Vacancy</th></tr>
<tr>
	<td>Job Title :</td>
	<td><input type="text" name="jobtitle" value="<?php echo $row['J_title'] ?>"  /></td>
</tr>
<tr>
	<td>Closing On :</td>
	<td><input type="text" name="close" class="tcal"   value="<?php echo $row['J_close']; ?>"></td>
</tr>
<tr>
	<td>Contact Email :</td>
	<td><input type="text" name="email" value="<?php echo $row['J_email']; ?>" /></td>
</tr>
<tr>
	<td>Job Describtion :</td>
	<td><textarea rows="5" cols="15" name="job_desc"><?php echo $row['J_description']; ?></textarea></td>
</tr>
<tr>
	<td>Preffered Skills :</td>
	<td><textarea rows="5" cols="15" name="skills"><?php echo $row['J_skills']; ?></textarea></td>
</tr>
<tr>
	<td>Experience : </td>
	<td><input type="text" name="experience" value="<?php echo $row['J_experience']; ?>"  /></td>
</tr>


<tr>
	<td>Salary : </td>
	<td><input type="text" name="salary"  value="<?php echo $row['salary']; ?>"/></td>
</tr>


<tr>
	<td>No Of Vancancy : </td>
	<td><input type="text" name="vacancy"  value="<?php echo $row['vacancy']; ?>"/></td>
</tr>


<tr>
	<td>Qualification : </td>
	<td><input type="text" name="qualification"  value="<?php echo $row['qualification']; ?>"/></td>
</tr>

<tr>
	<td>Place at Situation Vaccent : </td>
	<td><input type="text" name="place_vacant"  value="<?php echo $row['place_vacant']; ?>"/></td>
</tr>


<tr>
	<td>Place at which interview Held : </td>
	<td><input type="text" name="place_interview"  value="<?php echo $row['place_interview']; ?>"/></td>
</tr>


<tr>
	<td>Interview Date & Time : </td>
	<td><input type="text" name="interview_time"  value="<?php echo $row['interview_time']; ?>"/></td>
</tr>











<tr>
    <td colspan="2" align="right">&nbsp;<input name="submit" type="submit" value="Update" id="button" />
	</td>
</tr>
</table>
</form>

