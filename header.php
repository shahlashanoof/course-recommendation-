<?php
error_reporting(0);
session_start();
if($_REQUEST['st']=="login")
{
	echo "<script>alert('Please Login !!!')</script>";
}
?>
  <script type="text/javascript" src="js/validation/jquery_002.js"></script>
  <script type="text/javascript" src="js/validation/jquery.js"></script>




	<style type="text/css">

.error {
	font: normal 10px arial;
	clear:both;
	float:left;
	
color:#F00;

}
#contact
{
background-color:#F4F4F4;
	
}
input.error {
	font: normal 10px arial;
	background:#F2B7AC;
	border: 1px solid #C00;
}


	</style>
    
    

<style>
body
{
	text-align:center; /* for IE */
margin:0px auto;	
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
background:#EBEBEB;
}
#header_top
{
height:46px;
background:#06C;
color:#FFF;
width:100%;	
}
#header_menu_wrapper
{
width:1000px;


margin-left: auto ;
margin-right: auto ;
text-align:right;

}

#header_menu_wrapper a
{
color:#FFF;
text-align:right;
padding-left:10px;
text-decoration:none;
font-weight:bold;
padding-top:5px;

}
#header_logo_wrapper
{
background:#FFF;
height:58px;
width:100%;	
}
#header_logo
{
width:1000px;
margin-left: auto ;
margin-right: auto ;
background:#FFF;

height:100%;
}
#logo
{
margin-left:10px;
margin-top:5px;
float:left;	
}

#button {
	-moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
	box-shadow:inset 0px 1px 0px 0px #a4e271;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809) );
	background:-moz-linear-gradient( center top, #89c403 5%, #77a809 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809');
	background-color:#89c403;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #74b807;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #528009;
}#button:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403) );
	background:-moz-linear-gradient( center top, #77a809 5%, #89c403 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403');
	background-color:#77a809;
}#button:active {
	position:relative;
	top:1px;
}

#button_violet {
	-moz-box-shadow:inset 0px 1px 0px 0px #e184f3;
	-webkit-box-shadow:inset 0px 1px 0px 0px #e184f3;
	box-shadow:inset 0px 1px 0px 0px #e184f3;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c123de), color-stop(1, #a20dbd) );
	background:-moz-linear-gradient( center top, #c123de 5%, #a20dbd 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c123de', endColorstr='#a20dbd');
	background-color:#c123de;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #a511c0;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #9b14b3;
}#button_violet:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #a20dbd), color-stop(1, #c123de) );
	background:-moz-linear-gradient( center top, #a20dbd 5%, #c123de 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a20dbd', endColorstr='#c123de');
	background-color:#a20dbd;
}#button_violet:active {
	position:relative;
	top:1px;
}

#button_div
{
float:right;
margin-top:10px;	
}



#search-bt {
	-moz-box-shadow:inset 0px 1px 0px 0px #FF9933;
	-webkit-box-shadow:inset 0px 1px 0px 0px #FF9933;
	box-shadow:inset 0px 1px 0px 0px #FFCC66;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f0c911), color-stop(1, #f2ab1e) );
	background:-moz-linear-gradient( center top, #f0c911 5%, #f2ab1e 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0c911', endColorstr='#f2ab1e');
	background-color:#f0c911;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #FF9933;
	display:inline-block;
	color:#fff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #FF9933;
}#search-bt:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f2ab1e), color-stop(1, #f0c911) );
	background:-moz-linear-gradient( center top, #f2ab1e 5%, #f0c911 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2ab1e', endColorstr='#f0c911');
	background-color:#f2ab1e;
}#search-bt:active {
	position:relative;
	top:1px;
}
#search_box
{
background:#ccc;
border-radius:5px;
border:3px solid #fff;
padding:10px 10px 30px 20px;	
margin-top:30px;
}

.transbox
  {

  
  
  background-color:#ffffff;
  border:1px solid #CCCCCC;
  opacity:0.9;
  filter:alpha(opacity=90); /* For IE8 and earlier */
  }
#header_table
{
background:url(back.jpg) no-repeat ;
background-position:center top -30px;
background-position-x: 10px; 

}

#search_box select
{
	
width:220px;
border:1px solid #999;
color:#666;


font-size:16px;
height:24px;	
}

#resume_upload
{
background:#ccc;
border-radius:5px;
border:3px solid #fff;
padding:10px 10px 20px 20px;	
margin-top:30px;
}



#resume_upload select
{
	
width:160px;
border:1px solid #999;
color:#666;


font-size:16px;
height:24px;	
}


#resume_upload input[type="text"]
{
	
width:180px;
border:1px solid #999;
color:#666;



font-size:16px;
height:24px;	
}
#head
{
color:#06C;
font-weight:bold;
font-size:19px;	
}



#latest_job th
{
	-moz-box-shadow:inset 0px 1px 0px 0px #FF9933;
	-webkit-box-shadow:inset 0px 1px 0px 0px #FF9933;
	box-shadow:inset 0px 1px 0px 0px #FFCC66;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f0c911), color-stop(1, #f2ab1e) );
	background:-moz-linear-gradient( center top, #f0c911 5%, #f2ab1e 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f0c911', endColorstr='#f2ab1e');
	background-color:#f0c911;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	
	color:fff;
	font-weight:bold;
	padding:6px;
	font-size:16px;
}





#ask th
{
	-moz-box-shadow:inset 0px 1px 0px 0px #e184f3;
	-webkit-box-shadow:inset 0px 1px 0px 0px #e184f3;
	box-shadow:inset 0px 1px 0px 0px #e184f3;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #c123de), color-stop(1, #a20dbd) );
	background:-moz-linear-gradient( center top, #c123de 5%, #a20dbd 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c123de', endColorstr='#a20dbd');
	background-color:#c123de;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	color:fff;
	font-weight:bold;
	font-size:18px;
	padding:5px;
	text-align:right;
	text-shadow: 2px 2px #666;
}


#ask tr
{
	
	height:20px;
	background:#F4F4F4;
	font-size:12px;
	color:#666;
	text-align:right;
	text-indent:12px;
}







#latest_job
{
	border:1px solid #CCC;
	border-radius:6px;
	text-indent:2px;
}



#latest_job tr
{
	
	height:20px;
	background:#fff;
	font-size:13px;
	color:#333;
}
#latest_job 
{

	
	color:#FFF;
	cursor:pointer;
	
}

#latest_job a:hover
{

	color:#F00;
}
#latest_job a
{
	overflow:auto;
	width:100px;
	height:10px;
	background:#F4F4F4;
	font-size:12px;
	color:#666;
	text-decoration:none;
}


#green th
{
	
	background:url(latest.png);
	height:25px;

font-size:16px;
	text-shadow:1px 1px 0px #528009;
	
}

#green th:hover
{
	
	background:#FFF;
	color:#000;
	
}

#tip th
{
	
	background:url(tip.png);
	height:25px;

font-size:16px;
	text-shadow:1px 1px 0px #528009;
	
}
#login
{
border:1px solid #CCC;	
}
#login input[type="text"],input[type="password"]
{
	width:240px;
	height:30px;
	border:1px #999999 solid;
}
#table
{
background:#FFF;	
margin-top:6px;
}

#table th
{
background:#06C;
color:#fff;	
}
#terms
{
border:1px solid #CCC;
font-size:12px;	
background-color:#FEDCD3;

}
#terms ul, li
{
list-style:square;	
margin-left:-8px;
}
#tb_content
{
font-size:12px;	
}
#table
	{
	border:1px solid #CCC;	
	}
#table input[type="text"]
{
width:240px;
height:30px;	
border:1px #999999 solid;
}

#table select
{
width:240px;
height:30px;	
border:1px #999999 solid;
}

#table textarea
{
width:240px;
height:60px;
border:1px #999999 solid;	
}
#sta
{
color:#F00;
font-weight:bold;	
}
#job_details

{
background:#F0F0F0;	
min-height:600px;
	
} 
#job_details th
{
	background:#F0F0F0;	
text-align:left;
color:#09F;
font-family: 'Chela One', cursive;
font-size:36px;
}

</style>
<link href='http://fonts.googleapis.com/css?family=Chela+One' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/ico" href="facvion.png" />

<title>Fintoos</title>

  <div id="header_top">
<div id="header_menu_wrapper" >
<marquee style='color:#fff;float:left;width:500px;'>Test Run ... Course Recommend, please visit to info@fintoos.com, for latest course ....</marquee>

<?php
if($_SESSION['user']=="")
{
	
echo "

Welcome Guest&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='".$dir."index.php'>Home </a>&nbsp;|&nbsp; <a href='".$dir."company_login.php?log=logout'>Compnay LogIn</a>&nbsp;|&nbsp; <a href='".$dir."student_login.php?log=logout'>Student LogIn</a>
<br>
&nbsp;&nbsp;Helpline : 088934 40060 &nbsp;&nbsp; / &nbsp;&nbsp;E Mail : info@fintoos.com
";

}

else
{
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;Welcome ".$_SESSION['user'];
	
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='".$dir."index.php'>Home </a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href='".$dir."index.php?log=logout'>Log Out</a>";




}
?>
</div>
</div>


<div id="header_logo_wrapper">


<div id="header_logo">
<a href="<?php  echo $dir;  ?>index.php">
<img src="<?php  echo $dir;  ?>cb-logo.png" id="logo">
</a>
<div id="button_div">

<?php
if($_SESSION['user']!="")
{
	?>
<input id="button_violet" type="submit" value="Recommend Course" onclick="window.location.href='<?php  echo $dir;  ?>allcourse.php'"/>&nbsp;&nbsp;&nbsp;
<?php
}
else
{
	?>
    <input id="button" type="submit" value="Register A Student" onclick="window.location.href='<?php  echo $dir;  ?>student_login.php'"/>&nbsp;&nbsp;&nbsp;
<input id="button_violet" type="submit" value="Register A College" onclick="window.location.href='<?php  echo $dir;  ?>college_login.php'"/>&nbsp;&nbsp;&nbsp;
    <?php
}
?>
</div>
</div>

</div>


<div style="clear:both;"></div>
