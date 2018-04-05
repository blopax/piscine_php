<?PHP
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Lacation: ../index.php?register=1");
			return ;
		}
	}
	if ($_POST["submit"] !== "OK")
	{
		echo "ERROR2\n";
			header("Lacation: ../index.php?register=1");
		return;
	}
	if ($_POST["login"] === "" || $_POST["passwd"] === "")
	{
		echo "ERROR3\n";
			header("Lacation: ../index.php?register=1");
		return ;
	}
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $_POST["login"])
		{
			echo "ERROR4\n";
			header("Lacation: ../index.php?register=1");
			return ;
		}
		$i++;
	}
	$file[$i]["login"] = htmlentities($_POST["login"]);
	$file[$i]["passwd"] = hash("whirlpool", $_POST["passwd"]);
	$file[$i]["admin"] = 0;
	file_put_contents("private/passwd", serialize($file));
	echo "OK\n";
	header("Location: login.php?login=".$_POST["login"]."&passwd=".$_POST["passwd"]);
?>
