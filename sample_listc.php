<?php
error_reporting(0);
	include("connection.php");

$result = mysql_query("select * from course_rate group by email") or die("jjjjj".mysql_error());
$data='array(';
while ($row = mysql_fetch_array($result))
{
	//echo "$row[user]<br>";
$result24 = mysql_query("select * from  course_rate where email='$row[email]'") or die("jjjjj".mysql_error());
$data=$data.'"'.$row['college'].'" => array(';
while ($row24 = mysql_fetch_array($result24))
 {

 $data=$data.'"'.$row24['course'].'" => '.$row24['rate'].', ';
 $books[$row['email']][$row24['course']]=$row24['rate'];
 //echo "ff $data <br>";
 //echo $row24['pgm_epsid']."----------".$row24['user_name']."-----------<br>===========";
 }
 

//$data=substr("$data", 0, -2);
//$data=$data.'), ';
}
$data=substr("$data", 0, -2);
$data=$data.')';
//echo "".$data."<br>";

//echo "<br>".$books;

//echo $books[5]['Trivandrum'];


/*
$myFile = "a.txt";
$fh = fopen($myFile, 'r');
$books = fread($fh, filesize($myFile));
fclose($fh);
*/
?>