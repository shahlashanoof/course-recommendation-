<?php
include('connection.php');
$name=$_POST['name'];

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$applied=$_POST['applied'];
$asas=date("y-m-d-h-i-s");
$target_path = "biodata/";

$target_path = $target_path.$asas.basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
 {
    echo "<div id='sta'>Thanks For Uploading Your Resume...</div>";
} 
else
{
    echo "There was an error uploading the file, please try again!";
	}
mysql_query ("insert into c_biodata(name,email,mob,applied,path)values('$name','$email','$mob','$applied','$target_path')") or die ("Insert Error".mysql_error());


}
?>