<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require __DIR__ . "/../vendor/autoload.php";

// use CoffeeCode\DataLayer\Connect;

// $conn = Connect::getInstance();
// $error = Connect::getError();

// if ($error) {
// 	echo $error->getMessage();
// 	die();
// }

// $query = $conn->query("SELECT * FROM users");

// echo "<pre>";
// var_dump($query->fetchAll());
// echo "</pre>";

use App\Models\User;

$user = new User;
$list = $user->find()->fetch(true);

echo "<pre>";


foreach ($list as $item) {
	var_dump($item->data());
	var_dump($item->addresses());
}


echo "</pre>";

