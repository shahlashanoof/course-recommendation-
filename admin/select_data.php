<?php
include('../connection.php');
$user=$_SESSION['user'];

$j_id = $_REQUEST['id'];
if($j_id!="")
mysql_query("DELETE FROM job_details WHERE J_id = '$j_id'");
$result = mysql_query("SELECT * FROM job_details order by J_id desc"); 
?>
<table align="center" width="650" id="tb_content">
<tr>
<th>Job Id</th>
<th>Job Title</th>
<th>Closing On</th>
<th>Contact Email</th>
<th>Description</th>
<th>Preffered Skills</th>
<th>Experience</th>
<th>Edit</th>
<th>Delete</th>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['J_id']; ?></td>
<td><?php echo $row['J_title']; ?></td>
<td><?php echo $row['J_close']; ?></td>
<td><?php echo $row['J_email']; ?></td>
<td><?php echo $row['J_description']; ?></td>
<td><?php echo $row['J_skills']; ?></td>
<td><?php echo $row['J_experience']; ?></td>
<td align="center">
<a  href="job_skill.php?jid=<?php echo $row['J_id']; ?>" >Add Skill</a>
<a  href="filter.php?jid=<?php echo $row['J_id']; ?>" >Filter</a>
<a  href="job_post_edit.php?id=<?php echo $row['J_id']; ?>" onclick="return confirm('Are you sure you wish to update the datas')" >Update</a></td>
<td align="center"><a  href="?id=<?php echo $row['J_id']; ?>" onclick="return confirm('Are you sure you wish to delete the datas')">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php

?>
