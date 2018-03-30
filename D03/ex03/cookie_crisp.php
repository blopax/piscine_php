<?php
if ($_GET["action"] == "set" && $_GET['name'])
	setcookie($_GET["name"], $_GET["value"], time() + 3600);
if ($_GET["action"] == "get" && $_COOKIE[$_GET['name']])
	echo $_COOKIE[$_GET['name']]."\n";
if ($_GET["action"] == "del" && $_GET['name'])
	setcookie($_GET["name"], $_GET["value"], time() - 1);
?>
