<?php
/**
* database connection class
*/
class DB
{

	function __construct($user, $password, $dbcs)
	{
		$pdo_obj = new PDO($dbcs, $user, $password);
		$pdo_obj->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$pdo_obj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo_obj;
	}
}
?>
