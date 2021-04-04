<?php

include('header.php');
include('connection.php');
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
    


    <table width="700"  id="latest_job" >
    
    <tr id="green" style="text-align:left;"><th colspan="6" > College Jobs</th></tr>
    
     <tr>
    <th width="55px">Id</th>
    <th width="320px">Course Tiltle</th>
     <th>Description</th>
 
    
  </tr>
  <?php
  $jid=$_REQUEST['jid'];
  include("connection.php");
$result = mysql_query("SELECT * FROM course order by id=$jid ");
 
while($row = mysql_fetch_array($result))
{

  echo "<tr> ";
  echo "<td>". $row['id']." </a></td></a>";
  echo "  <td>".$row['name']."</td>";
  echo "  <td>".$row['description']."</td>";
  echo "  </tr>";
  
}
  
  
  ?>
  
  
  
  
  
  
  
  
  
  

  

</table>


<?php

include('footer.php');

?>