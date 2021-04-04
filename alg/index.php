<?php

$userdata = "c,c++,html,cpp";


require_once 'recommend.php';
require_once 'content_based.php';


mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("job_portal") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM course limit 0,10") 
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


foreach ($arr as $value=>$key) {
   // $value = $value * 2;
	echo $value." $key <br>";
}