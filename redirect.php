<?php
session_start();
include('connection.php');
//$db_name="music"; // Database name 

date_default_timezone_set("Asia/Calcutta");

// Connect to server and select databse.


// username and password sent from form 
$myusername=$_POST['UserName']; 
$mypassword=$_POST['Password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
	
if(isset($_POST['login']))
{
//echo "teacher";
$tbl_name="company_details"; // Table name 
$sql="SELECT * FROM $tbl_name WHERE C_email='$myusername' and C_password='$mypassword'";
echo $sql;
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
echo $count;
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['user'] =$myusername;
//echo $_SESSION['user'];
//echo $_SESSION['pass'];
//session_register("myusername");
//session_register("mypassword"); 
//echo "sucess";
$d=date('Y:m:d H:i:s');

$ip=$_SERVER['REMOTE_ADDR'];

mysql_query("insert into log_in (user_name,date1,ip) values ('$myusername','$d','$ip')") or die ("Error ".mysql_error());
if($myusername=="admin@gmail.com")
{
header("location:admin/company_details_panel.php");
}
else
{
header("location:Course/course_post_insert.php");
}
}
else 
{
header("location:compnay_login.php?a=error");
}
}




if(isset($_POST['slogin']))
{
//echo "teacher";
$tbl_name="student_details"; 
$sql="SELECT * FROM $tbl_name WHERE S_email='$myusername' and S_password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['user'] =$myusername;
//echo $_SESSION['user'];
//echo $_SESSION['pass'];
//session_register("myusername");
//session_register("mypassword"); 
//echo "sucess";
$d=date('Y:m:d H:i:s');

$ip=$_SERVER['REMOTE_ADDR'];

mysql_query("insert into log_in (user_name,date1,ip) values ('$myusername','$d','$ip')") or die ("Error ".mysql_error());

header("location:allcourse.php");

}
else 
{

header("location:student_login.php?a=error");
}
}

?>

 
 
 
 
 



