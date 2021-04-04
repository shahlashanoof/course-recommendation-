<?php
include('../connection.php');
$user=$_SESSION['user'];

$id = $_REQUEST['id'];
if($id!="")
mysql_query("DELETE FROM course WHERE id = '$id'");
$result = mysql_query("SELECT * FROM course where college='$user'");
?>
<table align="center" width="650" id="tb_content">
<tr>
<th> Id</th>
<th>Title</th>
<th>Discription</th>
<th>Edit</th>
<th>Delete</th>
<?php
while($row = mysql_fetch_array($result))
{
	
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['description']; ?></td>

<td align="center">

<a  href="course_post_edit.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you wish to update the datas')" >Update</a></td>
<td align="center"><a  href="?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you wish to delete the datas')">delete</a></td>
</tr>
<?php

}
?>
</table>
<?php

?>
