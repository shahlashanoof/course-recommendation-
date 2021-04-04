<?php
error_reporting(0);
	include("connection.php");

$result = mysql_query("select * from course group by name") or die("jjjjj".mysql_error());
$data='[';
while ($row = mysql_fetch_array($result))
{
	//echo "$row[user]<br>";
$result24 = mysql_query("select * from course where name='$row[name]'") or die("jjjjj".mysql_error());
$data=$data."'".$row['college']."' => [";

//'The Matrix' => ['Action', 'Sci-Fi'],
while ($row24 = mysql_fetch_array($result24))
 {

 //$data=$data."'".$row24['description'];

$someWords=$row24['description'];
$wordChunks = explode(",", $someWords);
for($i = 0; $i < count($wordChunks); $i++){
	$data= $data."'".$wordChunks[$i]."'," ;
}

$data= rtrim($data,"'");
//$data= rtrim($data,",");
$data= rtrim($data,"'");

 }
 $data=$data."],";

//$data=substr("$data", 0, -2);
//$data=$data.'), ';
}
$data=substr("$data", 0, -2);
$objects=$data.'],]';
//echo "".$objects."<br>";


//echo "<br>".$books;

//echo $books[5]['Trivandrum'];


/*
$myFile = "a.txt";
$fh = fopen($myFile, 'r');
$books = fread($fh, filesize($myFile));
fclose($fh);
*/
?>