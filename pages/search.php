<!-- install script -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="googlebot" content="none">
<meta name="robots" content="noindex, nofollow">
	<title>Search the site content</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
	<input type="text" name="q" placeholder="Search">
	<input type="hidden" name="sid" value="
	<?php 
		if (isset($_SERVER['HTTP_CLIENT_IP']))
		{
		    $real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
		}

		if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
		    $real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		    $real_ip_adress = $_SERVER['REMOTE_ADDR'];
		}
		echo geoip_country_name_by_name($real_ip_adress);
	 ?>
	 ">
	<input type="submit" value="Search">
</form>
</body>
</html>