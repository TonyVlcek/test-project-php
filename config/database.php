<?php

/*
* Copy .env.template to .env and set variables accordingly
*/

$database = [
	'address' 	=> getenv('DB_ADDR'),
	'username'	=> getenv('DB_USER'),
	'password'	=> getenv('DB_PASS'),
	'database'	=> getenv('DB_SCHEMA'),
];
