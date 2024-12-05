<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require __DIR__ . "/../vendor/autoload.php";

use App\Models\User;

$user = new User;
$user->first_name = "Albertina";
$user->last_name = "Fortuna";
$user->genre = "M";
$user->save();


echo "<pre>";

var_dump($user);

echo "</pre>";
