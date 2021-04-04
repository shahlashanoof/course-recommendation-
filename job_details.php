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
    

<table width="1000"  align="center" id="table" cellpadding="10">
  <tr valign="top">
    <td align="center">
        
    <table width="700" border="0"  id="job_details" cellpadding="1">
    
   
  <?php
  $j_id=$_REQUEST['jid'];
  $result = mysql_query("SELECT * FROM job_details  where J_id='$j_id'");
 
while($row = mysql_fetch_array($result))
{
	$jid=$row['J_id'];
	
	  $result2 = mysql_query("SELECT * FROM company_details  where C_email='$row[J_user]'");
 
$row2 = mysql_fetch_array($result2);

	
	
   echo "<tr><th colspan='2'>Job Details</th></tr><tr> ";
   if($row['J_user']=="")
    echo "<td>Company</td><td>Admin</td></tr><tr>";
	else
	echo "<td>Company</td><td>". $row2['C_name']."  </td></tr><tr>";
  echo "<td>Job Title</td><td>". $row['J_title']." </td></tr><tr>";
    echo "<td>Posted On</td><td>". $row['J_posted']."&nbsp;&nbsp;Closed On :&nbsp;&nbsp;". $row['J_close']." </td></tr><tr>";
  echo "  <td>Job Description</td><td>".$row['J_description']."</td></tr><tr>";
 echo "  <td>Skills Needed</td><td>".$row['J_skills']."</td></tr><tr>";
  echo "  <td>Experience</td><td>".$row['J_experience']."</td></tr><tr>";
  echo "  <td>Job Date</td><td>".$row['J_close']."</td></tr><tr>";
   echo "  <td>No: Of Vacancy</td><td>".$row['vacancy']."</td></tr><tr>";
    echo "  <td>qualification</td><td>".$row['qualification']."</td></tr><tr>";
	 echo "  <td>Job Location</td><td>".$row['place_vacant']."</td></tr><tr>";
	 echo "  <td>Interview Venu</td><td>".$row['place_interview']."</td></tr><tr>";
	  echo "  <td>Interview Time</td><td>".$row['interview_time']."</td></tr><tr>";
  
     
}
  
  
  ?>
  
  
  
  
  
  
  
  
  
  

  

</table>

    
    
    
    </td>
    <td>
    <?php
    
    include("post_resume_apply.php");
	
	
	
	?><td>
    
    </td>
  </tr>
</table>

<?php

include('footer.php');

?>