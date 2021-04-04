  <script type="text/javascript" src="js/validation/jquery_002.js"></script>
  <script type="text/javascript" src="js/validation/jquery.js"></script>


<script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != param;
}, "Please enter your name");


		
		$(document).ready(function() {
			$("#valid").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					cname: 
					{
					required: true,
					notEqual: "Your Name"
					},// simple rule, converted to {required:true}
					email: {				// compound rule
						required: true,
						email: true
					},
					url: {
						url: true
					},
					phone: {
						required: true,
						number: true,
						rangelength: [10,12]
					
					},
					mobile: {
						required: true,
						number: true,
						rangelength: [10,12]
					
					},
					comment: {
						required: true
					}
				},
				messages: {
					comment: "Please enter a comment."
				}
			
			});
			
				
		});

		

		
	
	</script>

	<style type="text/css">
	#reg_company
	{
	border:1px solid #CCC;	
	}
#reg_company input[type="text"]
{
width:240px;
height:30px;	
border:1px #999999 solid;
}
#reg_company textarea
{
width:240px;
height:60px;
border:1px #999999 solid;	
}
.error {
	font: normal 10px arial;
	clear:both;
	float:left;
	
color:#F00;

}

input.error {
	font: normal 10px arial;
	background:#F2B7AC;
	border: 1px solid #C00;
}


	</style>
    



<form action="" method="post" id="valid" name="company">
<table border="0" align="center" id="reg_company" cellpadding="4">
<tr><th colspan="2">Register Your College</th></tr>
<tr>
	<td>College Name :</td>
	<td><input type="text" name="cname" /></td>
</tr>

<tr>
	<td>Location :</td>  
	<td><input type="text" name="location" /></td>
</tr>
<tr>
	<td>Address :</td>
	<td><textarea rows="5" cols="15" name="address"></textarea></td>
</tr>
<tr>
	<td>Website :</td>
	<td><input type="text" name="website" /></td>
</tr>

<tr>
	<td>Email :</td>
	<td><input type="text" name="email" /></td>
</tr>

<tr>
	<td>Mobile Number :</td>
	<td><input type="text" name="mobile" /></td>
</tr>
<tr>
	<td>Phone Number :</td>
	<td><input type="text" name="mobile" /></td>
</tr>

<tr id="contact">
	<td>Contact Person :</td>
	<td><input type="text" name="cpname" /></td>
</tr>


<tr>

	<td>Password :</td>
	<td><input type="password" name="password" /></td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="submit" name="c_submit" value="Register" id="button" /></td>
</tr>
</table>
</form>
<?php 
if(isset($_POST['c_submit']))
{
include('connection.php');
$query = "INSERT INTO company_details (C_name,C_location,C_website,C_address,C_email,C_mobile,C_phone,C_person,C_password) VALUES('$_POST[cname]','$_POST[location]','$_POST[website]','$_POST[address]','$_POST[email]','$_POST[mobile]','$_POST[phone]','$_POST[cpname]','$_POST[password]')";
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error($con));
  }
else
{   

}
}
?>

