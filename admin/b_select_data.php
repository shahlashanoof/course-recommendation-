<?php
include('../connection.php');
$status=$_REQUEST['sta'];
$id=$_REQUEST['id'];
if($status=="delete")
{
$query = "DELETE FROM c_biodata WHERE id = '$id'";
mysql_query($query) or die("Error in Delete".mysql_error());

}
$result = mysql_query("SELECT * FROM c_biodata");
?>
<table align="center" width="650" id="tb_content" >
<tr>
<th>Id</th>
<th>Name</th>

<th>Email</th>
<th>Mobile</th>
<th>Applied</th>
<th>Biodata</th>

<th>Delete</th>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>
<td><?php echo $row['mob']; ?></td>
<td><?php echo $row['applied']; ?></td>
<?php
$path=$row['path'];

?>
<td>

<a  href="job_skill2.php?bid=<?php echo $row['id']; ?>" >Add Skill</a>
<a href="<?php echo "../".$path; ?>" target="_blank">Biodata</a></td>

<td align="center"><a href="?id=<?php echo $row['id']; ?>&sta=delete" onclick="return confirm('are you sure you wish to delete the datas')">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php

?>
