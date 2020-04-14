<?php


		$mysqli = new MySQLi("us-cdbr-iron-east-01.cleardb.net", "bc0a400ba5c267","96945f2f", "heroku_a6523bd7a37156e");
		if ($mysqli -> connect_errno) {

			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}

// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// $server = $url["us-cdbr-iron-east-01.cleardb.net"];
// $username = $url["bc0a400ba5c267"];
// $password = $url["96945f2f"];
// $db = substr($url["heroku_a6523bd7a37156e"], 1);

// $conn = new mysqli($server, $username, $password, $db);
		
?>