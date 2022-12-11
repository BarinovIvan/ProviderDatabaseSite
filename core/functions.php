<?php
	require_once 'db.php';
	$query_params = json_decode(file_get_contents('php://input'), true);
	$route_name = $query_params['route_name'];
	$insertedData = $query_params['insertData'];

	/////////////////////////////////////////////////////////////////////////////////////////////

	if ($route_name === 'stuff' and $insertedData != null) {
		$data = explode(';', $insertedData);
		$insertQuery = "('$data[0]','$data[1]',$data[2],'$data[3]');";
		$sql = "INSERT INTO stuff (StuffName, SecondName, WorkingPosition, PhoneNumber) VALUES " . $insertQuery;
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo($sql);
	}

	if ($route_name === 'client_ip' and $insertedData != null) {
		$data = explode(';', $insertedData);
		if ($data[0] = 'delete') {
			$insertQuery = "$data[1];";
			$sql = "DELETE FROM client_ip WHERE ip_id = " . $insertQuery;
		} else {
			$insertQuery = "('$data[1]',$data[0]);";
			$sql = "INSERT INTO client_ip (IpAddress, Client) VALUES " . $insertQuery;
		}
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo($sql);
	}

	if ($route_name === 'client_applications' and $insertedData != null) {
		$data = explode(';', $insertedData);
		$insertQuery = "($data[0],'$data[1]','$data[2]');";
		$sql = "INSERT INTO client_applications (Client, Description, CreationDate) VALUES " . $insertQuery;
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo($sql);
	}

	if ($route_name === 'clients' and $insertedData != null) {
		$data = explode(';', $insertedData);
		if ($data[0] = 'delete') {
			$insertQuery = "$data[1];";
			$sql = "DELETE FROM clients WHERE clientID = " . $insertQuery;
		} else {
			$insertQuery = "('$data[0]','$data[1]','$data[2]','$data[3]',$data[4]);";
			$sql = "INSERT INTO clients (ClientName, SecondName, Address, PhoneNumber, Tariff) VALUES " . $insertQuery;
		}
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo($sql);
	}

	if ($route_name === 'tasks' and $insertedData != null) {
		$data = explode(';', $insertedData);
			if ($data[0] = 'update') {
				$insertQuery = "'$data[2]'";
				$sql = "UPDATE tasks SET Description = " . $insertQuery . " WHERE TaskID = " . $data[1] ;
			} else {
				$insertQuery = "('$data[0]','$data[1]');";
				$sql = "INSERT INTO tasks (Description, Application) VALUES " . $insertQuery;
			}
		$stmt = $db->prepare($sql);
		$stmt->execute();
		echo($sql);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////

	if ($route_name === 'client_applications' and $insertedData == null) {
		$client_applications = $db->query("SELECT * FROM client_applications", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($client_applications as $application) {
			$arr['data'][] = $application;
		}
		echo json_encode($arr['data']);
	}

	if ($route_name === 'tasks' and $insertedData == null) {
		$provider_tasks = $db->query("SELECT * FROM tasks", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($provider_tasks as $task) {
			$arr['data'][] = $task;
		}
		echo json_encode($arr['data']);

	}

	if ($route_name === 'clients' and $insertedData == null) {
		$clients = $db->query("SELECT * FROM clients", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($clients as $client) {
			$arr['data'][] = $client;
		}
		echo json_encode($arr['data']);
	}

	if ($route_name === 'stuff' and $insertedData == null) {
		$stuff = $db->query("SELECT * FROM stuff", PDO::FETCH_ASSOC);
		$arr['data'] = [];
		foreach ($stuff as $worker) {
			$arr['data'][] = $worker;
		}
		echo json_encode($arr['data']);
	}
?>