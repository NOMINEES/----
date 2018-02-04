<?php
function factorial($num){
	$result = 1;
	for($i=1;$i<$num;$i++){
		$result *= $i;//a*=b ,a=a*b
	}
	return $result;
}
$num1 = 3;
echo factorial($num1);
echo $num1;