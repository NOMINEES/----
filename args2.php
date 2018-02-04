<?php
$a =1;
function test_local(){
	echo $a;
}

$g_name = "111";
function show_name(){
	echo $GLOBALS['g_name'];
	
}
show_name();