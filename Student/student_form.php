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
<tr><th colspan="2">Register Your Student</th></tr>
<tr>
	<td>Student :</td>
	<td><input type="text" name="sname" /></td>
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
	<td>Email :</td>
	<td><input type="text" name="email" /></td>
</tr>

<tr>
	<td>Mobile Number :</td>
	<td><input type="text" name="mobile" /></td>
</tr>
<tr>

	<td>Password :</td>
	<td><input type="password" name="password" /></td>
</tr>
<tr>
	<td colspan="2" align="right"><input type="submit" name="s_submit" value="Register" id="button" /></td>
</tr>
</table>
</form>
<?php 
if(isset($_POST['s_submit']))
{
include('connection.php');
$query = "INSERT INTO student_details (S_name,S_location,S_address,S_email,S_mobile,S_password) VALUES('$_POST[sname]','$_POST[location]','$_POST[address]','$_POST[email]','$_POST[mobile]','$_POST[password]')";
if (!mysql_query($query))
  {
  die('Error: ' . mysql_error($con));
  }
else
{   

}
}
?>

