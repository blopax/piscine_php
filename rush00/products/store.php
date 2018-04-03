<html>
<body>
<?PHP
	$products = unserialize(file_get_contents("private/products"));
	foreach ($products as $product)
	{
		echo "product: ".$product["product"]."<br\>description: ".$product["description"]."<br>price".$product["price"]."<br/><img src='".$product["image"]."'>";
		echo "Categorie : ";
		foreach ($product["categories"] as $categorie)
		{
			echo $categorie." ";
		}
		echo "<br>";
	}
?>
</body>
<html>
