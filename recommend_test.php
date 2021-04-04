<?php

require_once("recommend.php");
require_once("sample_list.php");

$jid=$_REQUEST['jid'];

$re = new Recommend();
echo "<br><b> JOB Recommended  </b> :: <br>";
//print_r($re->getRecommendations($books, $jid));
$a=$re->getRecommendations($books, $jid);


foreach ($a as $key => $val) 
{
	echo $key."---".$val."<br>";
	}


  $result = mysql_query("SELECT * FROM skills where dtype='' group by ref_id");
 
while($row = mysql_fetch_array($result))
{
	
	 $result2 = mysql_query("SELECT * FROM job_details where J_id='$row[ref_id]'");
 
$row2 = mysql_fetch_array($result2);


echo "<br><b>Job Similarity $row[ref_id] <a href='?jid=$row[ref_id]'>$row2[J_title]</a> ::</b> ::";
$similarity =  $re->similarityDistance($books, $jid, $row['ref_id']);
//Converted to percent.
echo "<br>".sprintf("%.2f", $similarity * 100) . "%";

}
?>

