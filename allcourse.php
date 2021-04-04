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
    <?php
	if(isset($_REQUEST['title']))
	{
	}
	else
	{
	?>

<div id="header_table" style="border-bottom:6px solid #fff;">

<table width="1000" border="0" align="center"  height="360px" >
  <tr>
    <td width="700px" valign="top">
    <form  method="post" action="" enctype="multipart/form-data" >
<table width="690px"  id="search_box" class="transbox">
<tr><td colspan="3" id="head">Content Based Recomend </td></tr>
  <tr>
   
    <td><td><textarea  name="content"> Enter query..</textarea></td></td>
    <td><input type="submit" name="Search" value="Search" id="search-bt"></td>
  </tr>
</table></form>

 	
</div>
<?php
}
?>



<?php if(isset ($_POST['Search']))
{

$userdata = $_POST['content'];


require_once 'alg/recommend.php';
require_once 'alg/content_based.php';


mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("job_portal") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM course ") 
or die(mysql_error());  
$j=1;
while
($row = mysql_fetch_array( $result )) {
$title=$row['college'];
/*$d3[0]='Action';
$d3[1]='Crime';
$d3[2]='Drama';*/

$wordChunks = explode(",",$row['description']);
for($i = 0; $i < count($wordChunks); $i++){
	//echo "$title Piece $i = $wordChunks[$i] <br />";
	${"d".$j}[$i]=$wordChunks[$i];
	//$var=$wordChunks[$i];
}

$objects[$title] =${"d".$j};
$j++;	

}


for($i = 0; $i < count($wordChunks); $i++){

	$user[$i]=$wordChunks[$i];
	
}
//$user = ['Drama', 'Crime','Action'];

$user=explode(",",$userdata);

$engine = new ContentBasedRecommend($user, $objects);

$arr=$engine->getRecommendation();
//print($r[0]);
?>


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

foreach ($arr as $value=>$key) {
   // $value = $value * 2;
	//echo "<a href='course_details.php?jid=$jid'>".$value."</a>  <br>";
	
	if($key!=0)
	{

  include("connection.php");
$result = mysql_query("SELECT * FROM company_details WHERE C_email='$value' ");
 
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
  
	}
	}
  ?>
  
  
  
  
  
  
  
  
  
  

  

</table>

    
    
    

    
    <?php

}
else
{?>








<table width="1000" align="center" border="0" class="transbox" cellpadding="10">
  <tr>
    <td width="700" align="left" valign="top">
    
    
    
    
    
    
    

    
    <table width="700"  id="latest_job" >
    
    <tr id="green" style="text-align:left;"><th colspan="6" > College Course</th></tr>
    
     <tr>
    <th width="55px">Id</th>
    <th width="320px">Collage Tiltle</th>
     <th>Location</th>
 
    <th width="55px">Mobile</th>
   
        <th width="55px">Course Details</th>
  </tr>
  <?php
  include("connection.php");
  $course=$_REQUEST['title'];
  if(isset($_REQUEST['title']))
  {
	  $result1 = mysql_query("SELECT * FROM course WHERE name='$course'");
	  while($row1 = mysql_fetch_array($result1))
		{
			$result = mysql_query("SELECT * FROM company_details WHERE C_email='$row1[college]'");
		}
  }
  else
  {
$result = mysql_query("SELECT * FROM company_details order by C_id desc ");
  }
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
}
include('footer.php');

?>