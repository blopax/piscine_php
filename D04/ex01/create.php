<?php

if (!(isset($_POST["login"]) && $_POST["login"] !== ""  && isset($_POST["passwd"]) && $_POST["passwd"] !== "" && isset($_POST["submit"]) && $_POST["submit"] === "OK"))
{
	echo "ERROR\n";
	exit;
}

$login = $_POST["login"];
$passwd = hash("whirlpool", $_POST["passwd"]);
$new_account = array("login" => $login, "passwd" => $passwd );

if (!file_exists("../private"))
	mkdir("../private");

$file = [];
if (file_exists("../private/passwd"))
	$file = unserialize(file_get_contents("../private/passwd"));

foreach ($file as $account)
{
	if ($account["login"] === $login)
	{
		echo "ERROR\n";
		exit;
	}
}

$file[] = $new_account;

file_put_contents("../private/passwd", serialize($file));
echo "OK\n";

?>
