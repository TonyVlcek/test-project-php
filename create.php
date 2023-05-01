<?php

$app = require "./core/app.php";

// Create new instance of user
$user = new User($app->db);
// Insert it to database with POST data
$errors = $user->insert([
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'city' => $_POST['city']
]);

header("Content-Type: application/json");

if ($errors !== []) {
	http_response_code(400);
	echo json_encode($errors);
} else {
	http_response_code(200);
	echo json_encode(['status' => 'ok']);
}

exit();
