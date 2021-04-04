<?php
include('../../connection.php');
$status=$_REQUEST['sta'];
$id=$_REQUEST['id'];
if($status=="delete")
{
$query = "DELETE FROM company_details WHERE C_id = '$id'";
mysql_query($query) or die("Error in Delete".mysql_error());
echo "Delete";
}
$result = mysql_query("SELECT * FROM company_details");
?>
<table align="center" border="1" >
<tr>
<th>Company Id</th>
<th>Company Name</th>
<th>Location</th>
<th>Address</th>
<th>Email</th>
<th>Mobile</th>
<th>Phone</th>
<th>Update</th>
<th>Delete</th>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['C_id']; ?></td>
<td><?php echo $row['C_name']; ?></td>
<td><?php echo $row['C_location']; ?></td>
<td><?php echo $row['C_address']; ?></td>
<td><?php echo $row['C_email']; ?></td>
<td><?php echo $row['C_mobile']; ?></td>
<td><?php echo $row['C_phone']; ?></td>
<td align="center"><a href="edit.php?id=<?php echo $row['C_id']; ?>" onclick="return confirm('are you sure you wish to update the datas')">Update</a></td>
<td align="center"><a href="?id=<?php echo $row['C_id']; ?>&sta=delete" onclick="return confirm('are you sure you wish to delete the datas')">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php

?>
