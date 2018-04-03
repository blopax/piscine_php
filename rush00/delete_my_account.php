<?PHP
	session_start();
	include ("is_admin.php");
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Location: form_delete_account.php");
			return ;
		}
	}
	if ($_POST["submit"] !== "OK")
	{
		echo "ERROR2\n";
		header("Location: form_delete_account.php");
		return;
	}
	if ($_SESSION["logged_on_user"] === "" || is_admin($_SESSION["logged_on_user"]) === 2 || $_POST["passwd"] === "")
	{
		echo "ERROR3\n";
		header("Location: form_delete_account.php");
		return ;
	}
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["login"] === $_SESSION["logged_on_user"])
		{
			print_r($file);
			array_splice($file, $i, 1);
			print_r($file);
			file_put_contents("private/passwd", serialize($file));
			echo "OK\n";
//			header("Location: logout.php");
			return ;
		}
		$i++;
	}
	echo "ERROR\n";
	header("Location: form_delete_account.php");
?>
