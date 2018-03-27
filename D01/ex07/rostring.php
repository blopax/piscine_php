#!/usr/bin/php
<?php
if ($argc > 1)
{
	$array = array_filter(explode(' ', $argv[1]));
	$size = 0;
	foreach ($array as $value)
		$size++;
	$i = 1;
	while ($i < $size)
	{
		echo $array[$i]." ";
		$i++;
	}
	echo "$array[0]\n";
}
?>
