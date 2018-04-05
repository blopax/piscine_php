<?PHP
session_start();
	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
		{
			echo "ERROR1\n";
			header("Location: ../index.php?panier=1");
			return ;
		}
	}
	if ($_POST["submit"] !== "Commander")
	{
		echo "ERROR2\n";
			header("Location: ../index.php?panier=1");
		return;
	}
	if (!isset($_SESSION["logged_on_user"]) || $_SESSION["logged_on_user"] === "")
	{
		echo "ERROR3\n";
		header("Location: ../index.php?panier=1");
		return ;
	}
	$str_file = file_get_contents("../private/commandes");
	$file = unserialize($str_file);
	$i = 0;
	foreach ($file as $elem)
		$i++;
	$file[$i]["user"] = htmlentities($_SESSION["logged_on_user"]);
	$j++;
	foreach ($_SESSION["panier"] as $commande => $nb)
	{
		$file[$i]["produit"][$commande] = $nb;
		$j++;;
	}
 	file_put_contents("../private/commandes", serialize($file));
	echo "OK\n";
	$_SESSION["panier"] = array();
	header("Location: ../index.php?panier=1");
?>
