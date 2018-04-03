<?PHP session_start(); 
include ("install.php");
include ("is_admin.php");
include ("panier/price.php");
include ("user_list.php");
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>PHP Pool</title>
	<style>
  body
	  {
		margin: 0;
		background-color: #f6f6f6;
	  }


	  header
	  {
		background: #FFFFFF;
		height: 75px;
		width: 100vw;
		position: fixed;
		top : 0px;
		box-shadow: 1px 1px 12px #aaa;
		border-radius: 10px;
	  }

	  .nav
	  {
		height: auto;
		background: #FFFFFF;
		width: 20vw;
		max-width: 300px;
		min-width: 220px;
	min-height: 750px;
		box-shadow: 1px 1px 12px #aaa;
		border-radius: 10px;
	  }

	  .article
	  {
		border-radius: 10px;
		display: flex;
		position: relative;
		width: 60vw;
		height: auto;
		background: ##f6f6f6;
		flex-wrap: wrap;
		flex-direction: row;
		align-content: flex-start;
	  }

	  .object
	  {
		display: flex;
		border-radius: 10px;
		flex: 0 0 21%;
		margin-left: 2vw;
		margin-bottom: 50px;
		width: 13vw;
		max-width: 150px;
		min-width: 100px;
		height: 13vw;
		max-height: 150px;
		min-height: 100px;
		background: #FFFFFF;
		box-shadow: 1px 1px 12px #aaa;
		flex-wrap: wrap;
		align-content: flex-start;
		text-align: center;
	  }
	  .login-zone
	  {
		border-radius: 10px;
		display: flex;
		width: 60vw;
		height: auto;
		margin-bottom: 50px;
		background-color: #f6f6f6;
		justify-content: space-between;
	  }
	  .title
	  {
		border-radius: 10px;
		display: flex;
		width: 60vw;
		height: 75px;
		margin-bottom: 50px;
		background-color: #FFFFFF;
		justify-content: center;
		box-shadow: 1px 1px 12px #aaa;
	  }
	  .connexion
	  {
		flex-direction: column;
		margin-right: 10px;
		border-radius: 10px;
		padding-bottom: 20px;
		display: flex;
		width: 30vw;
		height: auto;
		background-color: #FFFFFF;
		box-shadow: 1px 1px 12px #aaa;
	  }
	  .inscription
	  {
		flex-direction: column;
		display: flex;
		width: 30vw;
		padding-bottom: 20px;
		height: auto;
		border-radius: 10px;
		display: flex;
		background-color: #FFFFFF;
		box-shadow: 1px 1px 12px #aaa;
	  }
	  .change-password
	  {
		flex-direction: column;
		display: flex;
		width: 60vw;
		height: auto;
		border-radius: 10px;
		display: flex;
		background-color: #FFFFFF;
		box-shadow: 1px 1px 12px #aaa;
	  }
	  .inventory
	  {
		flex-direction: column;
		display: flex;
	flex-wrap: wrap;
		width: 60vw;
		height: auto;
		border-radius: 10px;
		display: flex;
		background-color: #FFFFFF;
		box-shadow: 1px 1px 12px #aaa;
	  }
	  .profile
	  {
		display: flex;
		align-items: inline-block;
	  }
	  .img1
	  {
		border-radius: 50%;
		width: 6vw;
		min-width: 35px;
		height: 6vw;
		min-height: 35px;
		margin-left: 15px;
		margin-top: 15px;
	  }
	  .img2
	  {
		border-radius: 50%;
		width: 50px;
		height: 50px;
		float: right;
		margin-right: 20px;
		margin-top: 10px;

	  }
	  .price-article
	  {
	width: 8px;
	height: 8px
	flex-wrap: wrap;
		display:flex;
		flex-direction: row;

			  }
	  p1
			  {
					  width: 70px;
							display: flex;
						  flex-wrap: wrap;
						  flex-direction: column;
								font-family: Optima, sans-serif;
								margin-left: 5px;
									  }
	  p2
			  {
						font-family: Optima, sans-serif;
								text-align: left;
								margin-left: 10px;

	  }
	  h5
		{
		  display:inline-block;
		  font-family: Optima, sans-serif;
		  margin-left: 30%;
		}
	  h2
	  {
		font-family: Optima, sans-serif;
	  }
	  h3
	  {
		font-family: Optima, sans-serif;
		text-align: left;
		margin-left: 10px;
		margin-top: 40px;
		margin-bottom: 40px;
	  }
	  .left-menu
	  {
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 30px;
		margin-bottom: 50px;
		font-family: Optima, sans-serif;
		color: #a0a0a0;
		line-height: 45px;
	  }
	a:hover
	  {
	text-align: left;
		font-family: Optima, sans-serif;
	color:black;
	  }

	  .pannel
	  {
		margin-left: 30px;
		min margin-left: 10px;
		margin-top: 30px;
		font-size: 10px;
		font-family: Optima, sans-serif;
		color: #a0a0a0;
	  }
	  .avatar
	  {
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px;
		display: inline-block;
		border-radius: 50%;
		background-image: url(http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png);
		border:1px solid #0000000;
		width: 75px;
		min-width: 75px;
		height: 75px;
		min-height: 75px;
		background-position: 50% 50%;
		background-size: cover;
	  }
	  .right-menu
	  {
		display: flex;
		justify-content: flex-end;
		text-align: right;
	  }
	  .header-text
	  {
		display: inline-block;
		margin-top: 12px;
		margin-right: 15px;
		font-family: Optima, sans-serif;
		color: #a0a0a0;
		font-weight: bold;
		text-align: center;
		line-height: 25px;
	  }
	  .topavatar {
		display: inline-block;
		margin-top: 14px;
		margin-right: 20px;
		width: 45px;
		height: 45px;
		border-radius: 50%;
		background-image: url("http://pluspng.com/img-png/user-png-icon-male-user-icon-512.png");
		background-position: 50% 50%;
		background-size: cover;
	  }
	  .text-avatar
	  {
		font-family: Optima, sans-serif;
		display: inline-block;
		margin-top: 20px;
		margin-left: 1vw;
		font-weight: bold;
		color: #a0a0a0;
		text-align: center;
	}
	.photo-uploaded
	{
	  margin-left: 2px;
	  margin-right: 2px;
	  margin-top: 2px;
	  display: block;
	  border-radius: 5px;
	  width: 100%;
	  height: 30%;
	  background-position: 50% 50%;
	  background-size: cover;
	}
	</style>
  </head>
  <body>
	  <header>
<?PHP	
if (!isset($_SESSION["logged_on_user"]) || $_SESSION["logged_on_user"] === "")
	echo '<a href=index.php?register=1><div class="right-menu"><div class="header-text">Register </div><div class="topavatar"></div></div></a>';
else
{
	echo '<div class="right-menu"><div class="header-text">';
	echo '<a href=index.php?register=2>'.$_SESSION["logged_on_user"].'</div><div class="topavatar"></div></a>';
	echo "</div>";
}
?>
</header>
	  <div style="display : flex; justify-content : space-around; margin-top : 100px;">


		  <div class="nav">
			<div class="profile">
			  <div class="avatar"></div><br/>
			  <div class="text-avatar"> <br><br><i> <?= $_SESSION["logged_on_user"] ?> </i></div>
			</div>
<?PHP
if (is_admin($_SESSION["logged_on_user"]) === TRUE)
{
	echo '<a class="pannel" href="index.php?gestion_admin=1"><i>Create</i></a><br>
		<a class="pannel" href="index.php?list_user=Rechercher"><i>User list</i></a><br/>
		<a class="pannel" href="index.php?list_commande=1"><i>Commande</i></a>';
}
?>
		  </br>


			<h3> Categories disponibles :</h3>
		<a class="left-menu" href="index.php">all</a>

<?PHP				
$categories = unserialize(file_get_contents("products/private/categories"));
foreach ($categories as $categorie)
{
	echo '<div><a class="left-menu" href="index.php?categorie='.$categorie["name"].'">'.$categorie["name"]."</a>";
	if (is_admin($_SESSION["logged_on_user"]) === TRUE)
		echo '<a href="products/delete_categorie.php?categorie='.$categorie["name"].'" style="color:red;text-decoration:none"> X </a>';
	echo "</div>";
}
?>	
	<div>
		<a class="left-menu" href="index.php?panier=1"> Panier </a>
	</div>
	</div>

<?PHP
if (isset($_GET["gestion_admin"]) && $_GET["gestion_admin"] == "1" && is_admin($_SESSION["logged_on_user"]) === TRUE)
{
	echo '<div class="login-zone">
		<div class="connexion"><div><h3 style="text-align:center"> Create product </h3></div> <div style="text-align:center; align-content:center;">';
	echo '<form method="post" action="products/createproduct.php">
		<input type="text" required placeholder="product" name="product" value="" />
		<br />
		<br />
		<input type="number" required placeholder="price" name="price" value="" min="0" max=500 step="0.01"/>
		<br />
		<br />
		<input type="file" placeholder="img" name="image" value="" />
		<br />
		<br />';
$categories = unserialize(file_get_contents("products/private/categories"));
$i = 0;
foreach($categories as $categorie)
{
	echo '<input type="checkbox" id="'.$categorie["name"].'" value="'.$categorie["name"].'"name="categorie'.$i.'">';
	echo '<label for="'.$categorie["name"].'">'.$categorie["name"].'<br/><br/>';
	$i++;
}
echo '<input type="submit" name="submit" value="OK" /></form></div></div>';

echo '<div class="inscription">
	<div><h3 style="text-align:center"> Create category </h3></div>
	<div style="text-align:center; align-content:center;">';
echo '<form method="post" action="products/createcategorie.php">
	categorie:<input type="text" name="categorie" placeholder="categorie" value="" />
	<br />
	<br />
	<input type="submit" required name="submit" value="OK"></form>
	</div>
	</div>
	</div>';
}
else if (isset($_GET["panier"]) && $_GET["panier"] == "1")
{
	echo '<div class="inventory">';
	echo '<div><h3 style="text-align:center"> Inventaire ! </h3></div>';
	$total = 0;
	foreach ($_SESSION["panier"] as $key => $elem)
	{
		echo '<div style="display:flex;">
			<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> '.$key.' </div>
			<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> '.$elem.' <a href="panier/one_more_to_cart.php?name='.$key.'"> +</a>|<a href="panier/one_less_to_cart.php?name='.$key.'"> -</a></div>
			<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">'.price($key, $elem).'</div>
			</div>';
$total += price($key, $elem);
	}
	echo '<div style="display:flex"><div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> Total: </div>';
	echo '<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> </div>';
	echo '<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">'.$total.'</div></div>';
	echo '<div style="display:flex"><div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> </div>';
	echo '<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> </div>';
	echo '<div style="margin-bottom:10px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">
		<form method="post" action="panier/commande.php">
		<input type="submit" name="submit" value="Commander">
		</form></div></div>';
echo '</div>';
}
else if (isset($_GET["register"]) && $_GET["register"] == "1")
{
	echo '<div class="login-zone"><div class="connexion"><div><h3 style="text-align:center"> Connexion </h3></div> <div style="text-align:center; align-content:center;">
		<form method="get" action="login.php"><br><input name="login" type="text" required placeholder="Username"><br><br><input required name="passwd" type="password" placeholder="Password"/><br><br><input type="submit" name="submit" value="OK"></form></div></div>
		<div class="inscription"><div><h3 style="text-align:center"> Inscription </h3></div><div style="text-align:center; align-content:center;">
		<form method="post" action="create.php"><br><input required name="login" type="text" placeholder="Username"><br><br><input name="passwd" required type="password" placeholder="Password"/><br><br><input type="submit" name="submit" value="OK"></form></div></div></div>';
}
else if (isset($_GET["register"]) && $_GET["register"] == "2" && isset($_SESSION["logged_on_user"]) && $_SESSION["logged_on_user"] !== "")
{
	echo '<div class="change-password">
		<div>
		<h3 style="text-align:center"> Changement de mot de passe </h3></div>
		<div style="text-align:center; align-content:center;">
		<form method="post" action="modif_pw.php">
		<br><input required name="login" type="text" placeholder="Username"><br><br>
		<input required name="oldpw" type="password" placeholder="Old assword"/><br><br>
		<input required name="newpw" type="password" placeholder="New password"/><br><br>
		<input type="submit" name="submit" value="OK">
		</form>
		<br>
		<a href="logout.php">logout<a/><br>
		<br>
		<a href="delete_user.php?login='.$_SESSION["logged_on_user"].'">delete account<a/><br>
		<br>
		</div>
		</div>';
}
else if (isset($_GET["list_commande"]) && $_GET["list_commande"] === "1" && is_admin($_SESSION["logged_on_user"]) === TRUE)
{
	echo '<div class="inventory">';
	if (file_exists("private"))
	{
		$str_file = file_get_contents("private/commandes");
		$file = unserialize($str_file);
		foreach ($file as $commande)
		{
			echo '<div style="display:flex;flex-wrap:wrap;">';
			foreach($commande as $key => $value)
			{
				if ($key === "user")
					echo '<div style="display:flex;flex-flow:flex;margin-bottom:10px;margin-left:30px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">'.$key.': '.$value.'</div><br>';
				else if ($key === "produit")
				{
					foreach ($value as $produit => $nb)
						echo '<div style="display:flex;flex-flow:flex;margin-bottom:10px;margin-left:30px;line-height:30px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">'.$produit.': '.$nb.'</div><br>';
				}
			}
			echo '<br><br></div>';
		}
	}
	echo '</div>';
}
else if (isset($_GET["list_user"]) && $_GET["list_user"] === "Rechercher")
{
	echo '<div class="inventory">
		<div><h3 style="text-align:center"> Liste des Users! </h3></div>

		<form method="get" action="index.php">
		<input style="max-width:200px;margin-left:13%;margin-bottom:20px;" type="text" name="login" value="">
		<input type="submit" name="list_user" value="Rechercher">
		</form>';
echo display_list($_GET["login"]);
echo '</div>';
}
else
{
	echo '<div class="article">';
	if (isset($_GET["categorie"]))
		echo '<div class="article"><div class="title"><h2> '.$_GET["categorie"].' </h2></div>';	
	$products = unserialize(file_get_contents("products/private/products"));
	foreach ($products as $product)
	{
		if (!isset($_GET["categorie"]) || (isset($_GET["categorie"]) && in_array($_GET["categorie"], $product["categories"]) === TRUE))
		{
			echo '<div class="object">
				<div style="background-image: url(products/images/'.$product["image"].');" class="photo-uploaded"></div>	
				<div class="price-article"><a href="panier/add_to_cart.php?name='.$product["product"].'&categorie='.$_GET["categorie"].'"><p1> '.$product["product"].' </p1></a><h5> '.$product["price"].'$<h5>';
			if (is_admin($_SESSION["logged_on_user"]) === TRUE)
				echo '<a style="font-size:15px;color:red;display:flex;overflow:hidden;text-decoration:none;" href="products/delete_product.php?product='.$product["product"].'&categorie='.$_GET["categorie"].'">X</a>';
			echo '</div>
				</div>';
		}
	}
	echo '</div>';
}
?>

		</div>
	</body>
</html>
