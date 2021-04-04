<?php

require_once("recommend.php");
require_once("sample_list.php");

$jid=$_REQUEST['jid'];

$re = new Recommend();
//echo "<br><b>Recommended Other Skills</b> :: <br>";
//print_r($re->getRecommendations($books, $jid));
//$a=$re->getRecommendations($books, $jid);
//foreach ($a as $key => $val) 
//{
	//echo $key."---".$val."<br>";
	//}


  $result = mysql_query("SELECT * FROM skills where dtype='canidate' or ref_id='$jid' group by ref_id");
 
while($row = mysql_fetch_array($result))
{
	
	 $result2 = mysql_query("SELECT * FROM c_biodata where id='$row[ref_id]'");
 
$row2 = mysql_fetch_array($result2);


echo "<br><b>Resume Similarity $row[ref_id] Name : $row2[name] <br> E Mail $row2[email] <br> Mobile $row2[mobile]";
?>
<a href="<?php echo "../".$path; ?>" target="_blank">
<?php
echo "<br> Biodata $row2[mobile]</a>
::</b> ::";
$similarity =  $re->similarityDistance($books, $jid, $row['ref_id']);
//Converted to percent.
//if($similarity* 100>>49)
echo "<br>".sprintf("%.2f", $similarity * 100) . "%";

}
?>

