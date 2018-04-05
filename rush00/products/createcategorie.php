<?PHP
	session_start();
	include("auth.php");
	include ("is_admin.php");
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Location: ../index.php?gestion_admin=1");
			return ;
		}
	}
	if ($_POST["submit"] !== "OK")
	{
		echo "ERROR2\n";
		header("Location: ../index.php?gestion_admin=1");
		return;
	}
	if (is_admin($_SESSION["logged_on_user"]) === FALSE)
	{
		echo "ERROR3\n";
		header("Location: ../index.php?gestion_admin=1");
		return ;
	}
	$str_file = file_get_contents("private/categories");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if ($file[$i]["name"] === $_POST["categorie"])
		{
			header("Location: ../index.php?gestion_admin=1");
			return ;
		}
		$i++;
	}
	$file[$i]["name"] = htmlentities($_POST["categorie"]);
	file_put_contents("private/categories", serialize($file));
	echo "OK\n";
	header("Location: ../index.php?gestion_admin=1");
?>
