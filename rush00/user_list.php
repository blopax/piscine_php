<?PHP 
session_start(); 

function display_list($login)
{
	if (is_admin($_SESSION["logged_on_user"]) === FALSE)
		return;
 	if (!file_exists("private"))
	{
		if (mkdir("private") === FALSE)
			return ;
	}
	$str_file = file_get_contents("private/passwd");
	$file = unserialize($str_file);
	$i = 0;
	while (isset($file[$i]))
	{
		if (strstr($file[$i]["login"], $login))
		{		
			$str = $str.'<div style="display:flex;">';
			$str = $str.'<div style="margin-bottom:10px;line-height:15px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;"> ';
			$str = $str.$file[$i]["login"];
		    $str = $str.'</div><div style="margin-bottom:10px;line-height:15px;margin-top:20px;flex: 0 0 30%;font-family: Optima, sans-serif;text-align:center;">';
			if ($file[$i]["admin"] == 1)
				$str = $str." <a href='down_admin.php?login=".$file[$i]["login"]."'>DOWN</a>";
			else if ($file[$i]["admin"] == 0)
				$str = $str." <a href='up_admin.php?login=".$file[$i]["login"]."'>UP</a>";
			if (is_admin($_SESSION["logged_on_user"]) >= $file[$i]["admin"])
				$str = $str." |<a href='delete_user.php?login=".$file[$i]["login"]."'>delete</a></div></div><br/>";
 		}
		$i++;
	}
	return ($str);
 }
 
?>
