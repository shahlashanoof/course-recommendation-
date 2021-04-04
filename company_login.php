<?php

include('header.php');
if($_REQUEST['a']=="error")
{
	echo "<script> alert('UserName or Password Error')</script>";
}

?>
    <script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {
  return this.optional(element) || value != param;
}, "Please enter your name");


		
		$(document).ready(function() {
			$("#fvujq-form1").validate({
				submitHandler:function(form) {
					SubmittingForm();
				},
				rules: {
					name: 
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
    

<table width="1000"  align="center" id="table" cellpadding="10">
  <tr valign="top">
    <td align="center">
    <form method="post" action="redirect.php" >
    <table width="390" border="0" id="login" cellpadding="4">
  <tr>
  
    <th colspan="2">Login</th>
  </tr>
  <tr>
    <td>User Name</td>
    <td><input type="text" name="UserName" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="Password"  /></td>
  </tr>
  <tr>
    
    <td colspan="2" align="right"><input type="submit" name="login" value="Log In" id="button" /></td>
  </tr>
</table>

    </form>
    

    
    </td>
    <td>
    <?php
    
    include("Company/company_form.php");
	
	
	?><td>
    
    </td>
  </tr>
</table>

<?php

include('footer.php');

?>