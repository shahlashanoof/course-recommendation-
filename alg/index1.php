<?php

/**
 * PHP item based filtering
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * @package   PHP item based filtering
 */

require_once 'recommend.php';
require_once 'content_based.php';
//require_once 'sample_list.php';
$objects = ['Computer Science' => ['database',' apple',],'Information Technology' => ['html ','c ','c++','cpp','html ','c','network','Nnn',],];
/*$objects = [
	'The Matrix' => ['html', 'apple'],
	'Lord of The Rings' => ['apple', 'network', 'c++'],
	'Batman' => ['Action', 'Drama', 'c++'],
	'Fight Club' => ['Drama'],
	'Pulp Fiction' => ['Drama', 'Crime'],
	'Django' => ['Drama', 'Western'],
];
*/
$user = ['c++','html','apple','network'];

$engine = new ContentBasedRecommend($user, $objects);

$arr=$engine->getRecommendation();
//print($r[0]);


foreach ($arr as $value=>$key) {
   // $value = $value * 2;
	echo $value." $key <br>";
}