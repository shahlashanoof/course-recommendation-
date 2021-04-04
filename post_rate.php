
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
<tr><th colspan="3" id="head">RATE COURSE</th></tr>
  <tr valign="top">
    <td>
    <select name="course">
    <option>-- SELECT COURSE --</option>
    <?php
	session_start();
	 include('connection.php');
	  $jid=$_REQUEST['jid'];
  $result1 = mysql_query("SELECT * FROM company_details WHERE C_id='$jid' ");
 
$row1 = mysql_fetch_array($result1);
$ps="SELECT * FROM course WHERE college='$row1[C_email]'";
 $result = mysql_query($ps);
	while($row = mysql_fetch_array($result))
	{
		
	echo "<option value='$row[name]'>$row[name]</option>";
	}
	?>
    </select>
    
    </td>
  </tr><tr>  <td>
      <input name="email" value="Your Email" type="text" id="email" value="<?php echo $_SESSION['user']; ?> "onfocus="this.select()" onblur="this.value=!this.value?'Your E Mail':this.value;">
  		</td>
    </tr><tr>   <td><select name="rate">
    <option>-- SELECT RATE --</option>
    <option value='1'>1</option>
     <option value='2'>2</option>
      <option value='3'>3</option>
       <option value='4'>4</option>
        <option value='5'>5</option>
    </select></td>
  </tr>
  
  <tr>  <td><input type="submit" name="submit" value="Rate Now" id="search-bt"></td>
  </tr>
  
  
  
    <tr>
    <td colspan="3">
    <?php
	if(isset($_POST['submit']))
	{
	mysql_query ("insert into course_rate(email,course,college,rate)values('$_POST[email]','$_POST[course]','$row1[C_email]','$_POST[rate]')") or die ("Insert Error".mysql_error());
	
	}
	
	include("recommend_testc.php");
	echo "<br/>";
	//include("recommend_test.php");
	?>
    </td>
  </tr>
</table>
<br />

 
    
    </td>
    <td>&nbsp;</td>
  </tr>
</table></form>
   
    
 
