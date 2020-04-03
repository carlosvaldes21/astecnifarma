<?php
	$host = 'localhost';
	$user = 'u982399334_seat';
	$password = 'ms0GVbQSVh3B';
	$database = 'u982399334_siste';

		$mysqli = new mysqli($host,$user,$password,$database);


		if($mysqli->connect_errno){
			echo 'Conexion Fallida: ('. $mysqli->connect_errno.') '.$mysqli->connect_error;
			exit();
		}

?>