#!/usr/bin/php
<?php

if ($argc > 1)
{
	$ch = curl_init($argv[1]);
	$page=curl_exec($ch);
	curl_close($ch);

//	echo $page;

	preg_match_all('/<img.*?src="(.*?)".*?>/i', $page, $matches);
	print_r($matches);

}

?>
