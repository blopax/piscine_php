#!/usr/bin/php
<?php

function ft_is_sort($array)
{
	$sort = [];
	foreach ($array as $value)
		$sort[] = $value;
	print_r($array);
	sort($sort);
	print_r($sort);
	if ($array === $sort)
		return (TRUE);
	else
		return (FALSE);
}
?>
