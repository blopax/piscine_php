<?PHP
	if ($_POST["submit"] !== "OK")
	{
		echo "ERROR\n";
		header("Location: index.php?register=2");
		return;
	}
	if ($_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "")
	{
		echo "ERROR\n";
		header("Location: index.php?register=2");
		return ;
	}
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $_POST["login"])
		{
			if ($file[$i]["passwd"] == hash("whirlpool", $_POST["oldpw"]))
			{
				$file[$i]["passwd"] = hash("whirlpool", $_POST["newpw"]);
				file_put_contents("private/passwd", serialize($file));
				echo "OK\n";	
				header("Location: index.php");
				return ;
			}
			else
			{
				echo "ERROR\n";
				header("Location: index.php?register=2");
				return ;
			}
		}
		$i++;
	}
	header("Location: index.php?register=2");
	return ;
?>
