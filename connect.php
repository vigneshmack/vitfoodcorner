<?php

	function Connection(){
		$server="mysql.hostinger.in";
		$user="u811010036_root";
		$pass="vikivino";
		$db="u811010036_main";

		$connection = mysqli_connect($server, $user, $pass,$db);

		if (!$connection){
	    	die('MySQL ERROR: ' . mysqli_error());
		}

//		mysqli_select_db($db) or die( 'MySQL ERROR: '. mysqli_error() );

		return $connection;
	}
?>
