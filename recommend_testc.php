<?php
session_start();
require_once("recommendc.php");
require_once("sample_listc.php");
//$_SESSION['user']
$jid=$_REQUEST['jid'];

$re = new Recommend();
echo "<br><b>Algorthm Recommended</b> ::";
//print_r($re->getRecommendations($books,$_SESSION['user']));


$result=$re->getRecommendations($books,$_SESSION['user']);

foreach($result as $key => $value) {
	echo "<a href='allcourse.php?title=$key'> $key </a> <br>";
   // echo $key . '-' . $value."<br>";
}
?>

