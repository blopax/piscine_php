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
	$i = 1;
	$str = "";
	while ($i < $argc)
	{
		$str= $str." "."$argv[$i]";
		$i++;
	}
	$array = array_filter(explode(' ', $str), "check");
	sort($array);
	foreach ($array as $value)
		echo "$value\n";
}
?>
