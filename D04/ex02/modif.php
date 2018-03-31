<?php
if (isset($_POST["login"]) && $_POST["login"] !== ""  && isset($_POST["oldpw"]) && $_POST["oldpw"] !== "" && isset($_POST["newpw"]) && $_POST["newpw"] !== "" && isset($_POST["submit"]) && $_POST["submit"] === "OK" && file_get_contents("../private//passwd") !== FALSE)
{
	$login = $_POST["login"];
	$old_passwd = hash("whirlpool", $_POST["oldpw"]);
	$new_passwd = hash("whirlpool", $_POST["newpw"]);

	$file = unserialize(file_get_contents("../private/passwd"));
	foreach ($file as $key => $account)
	{
		if ($account["login"] === $login && $account["passwd"] === $old_passwd)
		{
			$file[$key]["passwd"] = $new_passwd;
			file_put_contents("../private/passwd", serialize($file));
			echo "OK\n";
		}
	}
}
else
	echo "ERROR\n";
?>
