<?PHP
	session_start();
	$_SESSION["panier"][$_GET["name"]]++;
	if ($_GET["categorie"] !== "")
		header("Location: ../index.php?categorie=".$_GET["categorie"]);
	else
		header("Location: ../index.php");
?>
