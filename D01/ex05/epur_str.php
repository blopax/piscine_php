#!/usr/bin/php
<?php
if ($argc > 1)
{
	$str="";
	$array = array_filter(explode(' ', $argv[1]));
	foreach ($array as $value)
		$str = $str.$value.' ';
	$str = substr($str, 0 , -1);
	
	echo $str."\n";
}
?>
