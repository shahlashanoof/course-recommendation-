<?php
error_reporting(0);
	include("connection.php");

$result = mysql_query("select * from skills group by ref_id") or die("jjjjj".mysql_error());
$data='array(';
while ($row = mysql_fetch_array($result))
{
	//echo "$row[user]<br>";
$result24 = mysql_query("select * from skills where ref_id='$row[ref_id]'") or die("jjjjj".mysql_error());
$data=$data.'"'.$row['ref_id'].'" => array(';
while ($row24 = mysql_fetch_array($result24))
 {

 $data=$data.'"'.$row24['skill'].'" => '.$row24['rate'].', ';
 $books[$row['ref_id']][$row24['skill']]=$row24['rate'];
 //echo "ff $data <br>";
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