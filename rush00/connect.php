<?PHP
	session_start();
?>
<html><body>
<form method="get" action="login.php">
	Identifiant: <input type="text" placeholder="login" name="login" value="<?PHP echo $_SESSION["login"]?>" /> 
	<br />
	Mot de passe:<input type="text" name="passwd" placeholder="password" value="<?PHP echo $_SESSION["passwd"]?>" />
	<br />
	<input type="submit" name="submit" value="OK" />
</form>
</body></html>
