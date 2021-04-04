<?php
session_start();
$dir="../";
include("$dir"."header.php");

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
    

<table width="1000"   align="center" id="table" cellpadding="4">


  <tr valign="top">
    <td align="center" width="240px" >
  <?php
   include('menu.php');
   ?>
    </td>

   <td>
    <?php
	
	include("course_form.php");
	?>
    </td>
  </tr>
</table>

<?php

include("$dir"."footer.php");

?>