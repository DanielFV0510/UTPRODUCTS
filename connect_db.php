<?php


		$mysqli = new MySQLi("us-cdbr-iron-east-01.cleardb.net", "bc0a400ba5c267","96945f2f ", "heroku_a6523bd7a37156e");
		if ($mysqli -> connect_errno) {

			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		
?>