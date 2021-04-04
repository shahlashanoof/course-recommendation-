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
    

<table width="1000"  align="center" id="table" cellpadding="4">
  <tr valign="top">
    <td align="center" width="240px" >
    
   <?php
   include('menu.php');
   ?>

    </td>
    <td>
   <td>
   <form action="" method="post">
  Skill  &nbsp;<input type="text" name="skill" /><br />
  <br /> Rate <input type="text" name="rate" />
   <br /><br />
   <input type="submit" name="submit" />
   </form>
    <?php
	include('../connection.php');
	if(isset($_POST['submit']))
{
	$user=$_SESSION['user'];
	$date=date('Y-m-d');
	$type=$_POST['j_type'];

$query = "INSERT INTO skills(ref_id,skill,rate) VALUES('$_REQUEST[id]','$_POST[skill]','$_POST[rate]')";
mysql_query($query) or die('Error: ' . mysql_error($con));

}


$result = mysql_query("SELECT * FROM skills where ref_id='$_REQUEST[jid]' and dtype=''");
?>
<table align="center" width="650" id="tb_content">
<tr>

<th>Skill</th>
<th>Rate</th>

<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['skill']; ?></td>
<td><?php echo $row['rate']; ?></td>


</tr>
<?php
}
?>
</table>
	
	
    </td>
  </tr>
</table>

<?php

include("$dir"."footer.php");

?>