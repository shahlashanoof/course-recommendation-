<html>
<head>
<link rel="stylesheet" type="text/css" href="calendar/tcal.css" />
<script type="text/javascript" src="calendar/tcal.js"></script>
</head>
<form action="" method="post">
<table border="0" align="center" id="table">
<tr><th colspan="2">Post A Vacancy</th></tr>
<tr>
	<td>Job Title :</td>
	<td><input type="text" name="jobtitle"  /></td>
</tr>

<tr>
	<td>Type :</td>
	<td><select name="j_type">
    <option>
    Full Time
    </option>
    
    <option>
    Part Time
    </option>
     <option>
   Full Time / Part Time
    </option>
    
    </select></td>
</tr>
<tr>
	<td>Closing On :</td>
	<td><input type="text" name="close" class="tcal" ></td>
</tr>
<tr>
	<td>Contact Email :</td>
	<td><input type="text" name="email" /></td>
</tr>
<tr>
	<td>Job Describtion :</td>
	<td><textarea rows="5" cols="15" name="job_desc"></textarea></td>
</tr>
<tr>
	<td>Preffered Skills :</td>
	<td><textarea rows="5" cols="15" name="skills"></textarea></td>
</tr>
<tr>
	<td>Qualification : </td>
	<td><input type="text" name="qualification"  /></td>
</tr>
<tr>
	<td>Experience : </td>
	<td><input type="text" name="experience"  /></td>
</tr>


<tr>
	<td>Vacancy : </td>
	<td><input type="text" name="vacancy"  /></td>
</tr>


<tr>
	<td>Job Location : </td>
	<td><input type="text" name="place_vacant"  /></td>
</tr>
<tr>
	<td>Interview Place : </td>
	<td><input type="text" name="place_interview"  /></td>
</tr>
<tr>
	<td>Interview Time : </td>
	<td><input type="text" name="interview_time"  /></td>
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
	$date=date('Y-m-d');
	$type=$_POST['j_type'];
	
	$vacancy=$_POST['vacancy'];
	$qualification=$_POST['qualification'];
	$place_vacant=$_POST['place_vacant'];
	$place_interview=$_POST['place_interview'];
	$interview_time=$_POST['interview_time'];
	
	
	
	
	
include('../connection.php');
$query = "INSERT INTO job_details(J_title,J_close,J_email,J_description,J_skills,J_experience,J_user,J_posted,J_type,vacancy,qualification,place_vacant,place_interview,interview_time) VALUES('$_POST[jobtitle]','$_POST[close]','$_POST[email]','$_POST[job_desc]','$_POST[skills]','$_POST[experience]','$user','$date','$type','$vacancy','$qualification','$place_vacant','$place_interview','$interview_time')";
mysql_query($query) or die('Error: ' . mysql_error($con));

}
?>