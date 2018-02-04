<?php
//find the max
$arr_num = array(1,23,25,3634,6346,7475);
$max_value = $arr_num[0];
foreach ($arr_num as $num){
	if($max_value < $num){
		$max_value = $num;
	}
}
echo $max_value;