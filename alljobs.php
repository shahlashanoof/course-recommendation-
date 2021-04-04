<?php
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

<div id="header_table" style="border-bottom:6px solid #fff;">

<table width="1000" border="0" align="center"  height="360px" >
  <tr>
    <td width="700px" valign="top">
   

 	
</div>










<table width="1000" align="center" border="0" class="transbox" cellpadding="10">
  <tr>
    <td width="700" align="left" valign="top">
    
    
    
    
    
    
    

    
    <table width="700"  id="latest_job" >
    
    <tr id="green" style="text-align:left;"><th colspan="6" > Latest Jobs</th></tr>
    
     <tr>
    <th width="55px">Posted</th>
    <th width="320px">Postion Tiltle</th>
     <th>Type</th>
 
    <th width="55px">Exp</th>
    <th width="55px">Closing</th>
        <th width="55px">Details</th>
  </tr>
  <?php
  include("connection.php");
$result = mysql_query("SELECT * FROM job_details  order by J_id desc ");
 
while($row = mysql_fetch_array($result))
{
	$jid=$row['J_id'];
   echo "<tr> ";
  echo "<td><a href='job_details.php?jid=$jid'>". $row['J_posted']." </a></td></a>";
  echo "  <td><a href='job_details.php?jid=$jid'>".$row['J_title']."</a></td>";
 echo "  <td><a href='job_details.php?jid=$jid'>".$row['J_type']."</a></td>";
  echo "  <td><a href='job_details.php?jid=$jid'>".$row['J_experience']."</a></td>";
  echo "  <td><a href='job_details.php?jid=$jid'>".$row['J_close']."</a></td>";
     echo "  <td><a href='job_details.php?jid=$jid'>Details</a></td>";
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