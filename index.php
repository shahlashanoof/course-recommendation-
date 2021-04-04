<?php
error_reporting(0);
session_start();
$log=$_REQUEST['log'];
if($log=="logout")
{
session_destroy();	
header("Location:index.php?a=1");	
}
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



<table width="1000" align="center" border="0" class="transbox" cellpadding="10">
  <tr>
    <td width="700" align="left" valign="top">
    
    
    
    
    
    
    

    
    <table width="700"  id="latest_job" >
    
    <tr id="green" style="text-align:left;"><th colspan="6" > College Jobs</th></tr>
    
     <tr>
    <th width="55px">Id</th>
    <th width="320px">Collage Tiltle</th>
     <th>Location</th>
 
    <th width="55px">Mobile</th>
   
        <th width="55px">Course Details</th>
  </tr>
  <?php
  include("connection.php");
$result = mysql_query("SELECT * FROM company_details order by C_id desc ");
 
while($row = mysql_fetch_array($result))
{
	$jid=$row['C_id'];
	
  echo "<tr> ";
  echo "<td><a href='course_details.php?jid=$jid'>". $row['C_id']." </a></td></a>";
  echo "  <td><a href='course_details.php?jid=$jid'>".$row['C_name']."</a></td>";
  echo "  <td><a href='course_details.php?jid=$jid'>".$row['C_location']."</a></td>";
  echo "  <td><a href='course_details.php?jid=$jid'>".$row['C_mobile']."</a></td>";
  echo "  <td><a href='course_details.php?jid=$jid'>Details</a></td>";
  echo "  </tr>";
  
}
  
  
  ?>
  
  
  
  
  
  
  
  
  
  

  

</table>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </td>
    <td valign="top">
    
        
    

    <?php
	include("front_down_right_menu.php");
	?>

    
    </td>
  </tr>
</table>
<?php

include('footer.php');

?>