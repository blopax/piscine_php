<?PHP
	session_start();
	include("auth.php");
	include("is_admin.php");
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
	$str_file = file_get_contents("private/products");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		$i++;
	}
	$j = 0;
	foreach ($_POST as $key => $value)
	{
		if ($key === "product")
			$file[$i]["product"] = htmlentities($value);
		else if ($key === "price")
			$file[$i]["price"] = htmlentities($value);
		else if ($key === "image")
		{
			if ($value === "")
				$file[$i]["image"] = "default.png";
			else
				$file[$i]["image"] = htmlentities($value);
		}
		else if (strncmp($key, "categorie", 9) == 0)
		{
			$file[$i]["categories"][$j] = htmlentities($value);
			$j++;
		}
	}
	file_put_contents("private/products", serialize($file));
	echo "OK\n<br>";
	header("Location: ../index.php");
?>
