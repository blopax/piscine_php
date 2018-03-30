<?php
if (isset($_GET["action"]))
{
	if ($_GET["action"] == "set" && isset($_GET['name']) && isset($_GET['value']))
		setcookie($_GET["name"], $_GET["value"], time() + 3600);
	if ($_GET["action"] == "get" && isset($_COOKIE[$_GET['name']]))
		echo $_COOKIE[$_GET['name']]."\n";
	if ($_GET["action"] == "del" && isset($_GET['name']))
		setcookie($_GET["name"], '' , time() - 1);
}
?>
