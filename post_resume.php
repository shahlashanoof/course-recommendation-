<?php
session_start();
include('header.php');

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
    
   
  <form id="fvujq-form1" method="post" action="" enctype="multipart/form-data" >

    <table width="690px"  id="table" class="transbox" cellpadding="5">
<tr><th colspan="3" id="head">Upload Your Resume</th></tr>
  <tr valign="top">
    <td><input name="name" type="text" value="Your Name"  onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your Name':this.value;" ></td>
    <td>
      <input name="email" value="Your Email" type="text" id="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your E Mail':this.value;">
  		</td>
    <td><input type="text" name="mobile" value="Your Mobile" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your Mobile':this.value;"></td>
  </tr>
  
  <tr>
  <td><?php
  
  include("type.php");
  ?></td>
  
    <td><select>
    
    <option>Applying For</option>
    <option>Fresher</option><option> Management</option><option> Admin</option><option> HR</option><option> Senior Management </option>
    </select></td><td><input type="file" name="uploadedfile" value="Upload Your CV"/></td>
    
    <tr>
    
    <td><input type="submit" name="submit" value="Upload Your CV" id="search-bt"></td>
  </tr>
  
  
  
    <tr>
    <td colspan="3">
    <?php
	
	include('insert_biodata.php');
	?>
    </td>
  </tr>
</table>
<br />

 
    
    </td>
    <td>&nbsp;</td>
  </tr>
</table></form>
   
    
    </td>
  </tr>
</table>

<?php

include('footer.php');

?>