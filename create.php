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

// Redirect back to index - pass errors if any
if ($errors !== []) {
	header('Location: index.php?errors='.rawurlencode(json_encode($errors)));
} else {
	header('Location: index.php?success');
}
