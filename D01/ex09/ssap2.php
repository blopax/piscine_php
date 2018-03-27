#!/usr/bin/php
<?php

function check ($var)
{
	if ($var != '')
		return 1;
	else
		return 0;
}

function ft_new_cmp($a, $b)
{
	$a = strtolower($a);
	$b = strtolower($b);
	if (ctype_alpha($a) && !ctype_alpha($b))
		return -1;
	if (ctype_alpha($b) && !ctype_alpha($a))
		return 1;
	if (ctype_digit($a) && !ctype_digit($b))
		return -1;
	if (ctype_digit($b) && !ctype_digit($a))
		return 1;
		return strcmp($a, $b);
}

function ft_new_sort($str1, $str2)
{
	$len1 = strlen($str1);
	$len2 = strlen($str2);
	$len1 <= $len2 ? $len = $len1 : $len = $len2;
	$i = 0;
	while ($i < $len)
	{
		if (ft_new_cmp($str1[$i], $str2[$i]) != 0)
			return ft_new_cmp($str1[$i], $str2[$i]);
		$i++;
	}
	if ($len1 == $len2)
		return 0;
	else if ($len == $len1)
		return -1;
	else
		return 1;
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
	$count = count($array);
	if ($count > 1)
	{
		$i = 1;

		while ($i < $count)
		{
			$min_index = $i;
			$j = $i + 1;
			while ($j <= $count)
			{
				if (ft_new_sort($array[$min_index],$array[$j]) > 0)
					$min_index = $j;
				$j++;
			}
			if ($min_index != $i)
			{
				$tmp = $array[$i];
				$array[$i] = $array[$min_index];
				$array[$min_index] = $tmp;
			}
			$i++;
		}
	}
	foreach ($array as $value)
		echo "$value\n";
}
?>
