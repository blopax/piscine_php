<?php
function check ($var)
{
	if ($var != '')
		return 1;
	else
		return 0;
}

function	ft_split($str)
{
	$array = explode(' ', $str);
	$array = array_filter($array, "check");
	sort($array);
	return $array;
}
?>
