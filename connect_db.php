<?php


		$mysqli = new MySQLi("heroku_a6523bd7a37156e:3306", "bc0a400ba5c267","96945f2f ", "heroku_a6523bd7a37156e");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		
?>