#!/usr/bin/php
<?php
function check ($var)
{
	if ($var != '')
		return 1;
	else
		return 0;
}

function ft_str_epur ($argc, $argv)
{
	if ($argc > 1)
	{
		$str="";
		$array = array_filter(explode(' ', $argv[1]), "check");
		foreach ($array as $value)
			$str = $str.$value.' ';
		$str = substr($str, 0 , -1);
		return $str;
	}
}

if ($argc > 1)
{
	$str = ft_str_epur($argc, $argv);
	$array = array_filter(explode(' ', $str), "check");
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
