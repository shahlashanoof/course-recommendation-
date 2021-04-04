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
    <form  method="post" action="" enctype="multipart/form-data" >
<table width="690px"  id="search_box" class="transbox">
<tr><td colspan="3" id="head">Search For Latest Job</td></tr>
  <tr>
    <td>
    <?php
	include("type.php");
	?>
    </td>
    <td><select>
    
    <option>Select Location</option></select></td>
    <td><input type="submit" value="Search" id="search-bt"></td>
  </tr>
</table></form>

 	<form id="fvujq-form1" method="post" action="" enctype="multipart/form-data" >

    <table width="690px"  id="resume_upload" class="transbox" cellpadding="5">
<tr><td colspan="3" id="head">Upload Your Resume</td></tr>
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
    
    <option>Applying For</option></select></td>
    <td><input type="file" name="uploadedfile" value="Upload Your CV"/></td>
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
    
    
    </td>
    <td>&nbsp;</td>
  </tr>
</table></form>
</div>










<table width="1000" align="center" border="0" style="background:#EBEBEB;" cellpadding="10">
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
$result = mysql_query("SELECT * FROM job_details  order by J_id desc limit 0,10");
 
while($row = mysql_fetch_array($result))
{
	$jid=$row['J_id'];
   echo "<tr> ";
  echo "<td>". $row['J_posted']." </td></a>";
  echo "  <td>".$row['J_title']."</td>";
 echo "  <td>".$row['J_type']."</td>";
  echo "  <td>".$row['J_experience']."</td>";
  echo "  <td>".$row['J_close']."</td>";
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