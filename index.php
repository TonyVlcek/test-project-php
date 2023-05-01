<?php

// Init app instance
$app = require "./core/app.php";

// Get all users from DB, eager load all fields using '*'
$users = User::find($app->db,'*');

// Render view 'views/index.php' and pass users variable there
$app->renderView('index', [
	'users' => $users,
	'errors' => isset($_GET['errors']) ? json_decode($_GET['errors']) : [],
	'success' => isset($_GET['success']),
]);
