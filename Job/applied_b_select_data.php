<?php
include('../connection.php');
$status=$_REQUEST['sta'];
$id=$_REQUEST['id'];
if($status=="delete")
{
$query = "DELETE FROM apply_job WHERE id = '$id'";
mysql_query($query) or die("Error in Delete".mysql_error());

}

if($status=="approve")
{
$query = "UPDATE apply_job SET approve='approve' WHERE id = '$id'";
mysql_query($query) or die("Error in Delete".mysql_error());

}
if($status=="clear")
{
$query = "UPDATE apply_job SET approve='clear' WHERE id = '$id'";
mysql_query($query) or die("Error in Delete".mysql_error());

}
//$result = mysql_query("SELECT * FROM apply_job join job_details on J_id=applied join  company_details on C_email=J_email") or die("Error".mysql_error());
$user=$_SESSION['user'];
$result = mysql_query("SELECT * FROM apply_job join job_details on J_id=applied join company_details on C_email=J_user and approve='approve' ") or die("Error".mysql_error());
?>
<table align="center" width="650" id="tb_content" >
<tr>
<th>Id</th>
<th>Company Name</th>
<th>Job Title</th>
<th>Name</th>

<th>Email</th>
<th>Mobile</th>

<th>Biodata</th>

<th>Delete</th>

<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['C_name']; ?></td>
<td><?php echo $row['J_title']; ?></td>
<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mob']; ?></td>

<?php
$path=$row['path'];

?>
<td><a href="<?php echo "../".$path; ?>" target="_blank">Biodata</a></td>

<td align="center"><a href="?id=<?php echo $row['id']; ?>&sta=delete" onclick="return confirm('Are you sure you wish to delete the datas')">delete</a></td>


</tr>
<?php
}
?>
</table>
<?php

?>
