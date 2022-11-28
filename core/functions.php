<?php
	require_once 'db.php';
	$query_params = json_decode(file_get_contents('php://input'), true);
	$route_name = $query_params['route_name'];

	if ($route_name === 'client_applications') {
		$client_applications = $db->query("SELECT * FROM client_applications", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($client_applications as $application ) {
			$arr['data'][] = $application;
		}
		echo json_encode($arr['data']);
	}

	if ($route_name === 'tasks') {
		$provider_tasks = $db->query("SELECT * FROM tasks", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($provider_tasks as $task ) {
			$arr['data'][] = $task;
		}
		echo json_encode($arr['data']);

	}

	if ($route_name === 'clients') {
		$clients = $db->query("SELECT * FROM clients", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($clients as $client ) {
			$arr['data'][] = $client;
		}
		echo json_encode($arr['data']);
	}

	if ($route_name === 'stuff') {
		$stuff = $db->query("SELECT * FROM stuff", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($stuff as $worker ) {
			$arr['data'][] = $worker;
		}
		echo json_encode($arr['data']);
	}
?>