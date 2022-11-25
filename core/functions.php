<?php

	require_once 'db.php';
	$query_params = json_decode(file_get_contents('php://input'), true);
	$route_name = $query_params['route_name'];

	if ($route_name === 'client_applications') {
		$client_applications = $db->query("SELECT * FROM client_applications");
		$arr['data'] =  [];
		foreach ($client_applications as $application ) {
			array_push($arr['data'], $application);
		}
		echo json_encode($arr['data']);
	}

?>