#!/usr/bin/php
<?php
function check ($var)
{
	if ($var != '')
		return 1;
	else
		return 0;
}

if ($argc > 1)
{
	$str="";
	$array = array_filter(explode(' ', $argv[1]), "check");
	print_r($array);
	foreach ($array as $value)
		$str = $str.$value.' ';
	$str = substr($str, 0 , -1);
	
	echo $str."\n";
}
?>
