<?php
$c_id = $_REQUEST['id'];
include('../../connection.php');

if(isset($_POST['submit']))
{
	$cname = $_POST['cname'];
	$location = $_POST['location'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
    $query = "UPDATE company_details SET C_name = '$cname', C_location = '$location', C_address = '$address', C_email = '$email', C_mobile = '$mobile', C_phone = '$phone', C_password = '$password' WHERE C_id = '$c_id'" ;
     mysql_query($query) or  die('Error: ' . mysql_error());
 
}
?>
<?php
$result = mysql_query("SELECT * FROM company_details WHERE C_id = '$c_id'");
$row = mysql_fetch_array($result);
?>
<form name="f1" action="" method="post" >
<table align="center" border="1">
<tr>
	<td>Company Name :</td>
	<td><input type="text" name="cname" value="<?php echo $row['C_name'] ?>" /></td>
</tr>
<tr>
	<td>Location :</td>  
	<td><input type="text" name="location" value="<?php echo $row['C_location']; ?>" /></td>
</tr>
<tr>
	<td>Address :</td>
	<td><textarea rows="5" cols="15" name="address"><?php echo $row['C_address']; ?></textarea></td>
</tr>
<tr>
	<td>Email :</td>
	<td><input type="text" name="email" value="<?php echo $row['C_email']; ?>" /></td>
</tr>
<tr>
	<td>Mobile Number :</td>
	<td><input type="text" name="mobile" value="<?php echo $row['C_mobile']; ?>" /></td>
</tr>
<tr>
	<td>Phone Number :</td>
	<td><input type="text" name="phone" value="<?php echo $row['C_phone']; ?>" /></td>
</tr>
<tr>
	<td>Password :</td>
	<td><input type="password" name="password" value="<?php echo $row['C_password']; ?>" /></td>
</tr>
<tr>
    <td colspan="2">&nbsp;<input name="submit" type="submit" value="Update" />
	</td>
</tr>
</table>
</form>

