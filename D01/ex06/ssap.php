#!/usr/bin/php
<?php
if ($argc > 1)
{
	$i = 1;
	$str = "";
	while ($i < $argc)
	{
		$str= $str." "."$argv[$i]";
		$i++;
	}
	$array = array_filter(explode(' ', $str));
	sort($array);
	foreach ($array as $value)
		echo "$value\n";
}
?>
