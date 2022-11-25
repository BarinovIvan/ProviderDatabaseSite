<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=provider', 'root', '');
	} catch (PDOException $error) {
		print $error->getMessage();
		die();
	}
?>