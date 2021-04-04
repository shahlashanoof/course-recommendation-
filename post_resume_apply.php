
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
    

   
  <form id="fvujq-form1" method="post" action="" enctype="multipart/form-data" >

    <table   id="table" class="transbox" cellpadding="5">
<tr><th colspan="3" id="head">Apply For This Job</th></tr>
  <tr valign="top">
    <td><input name="name" type="text" value="Your Name"  onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your Name':this.value;" ></td>
  </tr><tr>  <td>
      <input name="email" value="Your Email" type="text" id="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your E Mail':this.value;">
  		</td>
    </tr><tr>   <td><input type="text" name="mobile" value="Your Mobile" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your Mobile':this.value;"></td>
  </tr>
  
  <tr>
    <td><input name="applied" value="<?php echo $j_id;  ?>" type="hidden" /></td>
    </tr><tr>   <td><input type="file" name="uploadedfile" value="Upload Your CV"/></td>
     </tr><tr>  <td><input type="submit" name="submit" value="Apply Now" id="search-bt"></td>
  </tr>
  
  
  
    <tr>
    <td colspan="3">
    <?php
	
	include('insert_biodata_apply.php');
	
	include("recommend_test.php");
	?>
    </td>
  </tr>
</table>
<br />

 
    
    </td>
    <td>&nbsp;</td>
  </tr>
</table></form>
   
    
 
