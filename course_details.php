<?php

include('header.php');
include('connection.php');
if($_SESSION['user']=="")
{
	header("location:index.php?st=login");
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
        
    <table width="700" border="0"  id="" cellpadding="1">
      
     <tr>
    <th width="55px">Id</th>
    <th width="320px">Course Tiltle</th>
     <th>Description</th>
 
    
  </tr>
   
  <?php
  $jid=$_REQUEST['jid'];
  $result1 = mysql_query("SELECT * FROM company_details WHERE C_id='$jid' ");
 
$row1 = mysql_fetch_array($result1);
$ps="SELECT * FROM course WHERE college='$row1[C_email]'";
 $result = mysql_query($ps);
 
while($row = mysql_fetch_array($result))
{

  echo "<tr> ";
  echo "<td>". $row['id']." </td>";
  echo "  <td>".$row['name']."</td>";
  echo "  <td>".$row['description']."</td>";
  echo "  </tr>";
  
}
  
  
  
  ?>
  
  
  
  
  
  
  
  
  
  

  

</table>

    
    
    
    </td>
    <td>
    <?php
    
    include("post_rate.php");
	
	
	
	?><td>
    
    </td>
  </tr>
</table>

<?php

include('footer.php');

?>