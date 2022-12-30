<?php

include("vendor/autoload.php");

// use Faker\Factory as Faker;

// use Helpers\Auth;
// use Helpers\HTTP;
// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;

// // create object
// $faker = Faker::create();
// echo $faker->name . "<br>";

// Auth::check();
// echo "<br>";

// HTTP::redirect();
// echo "<br>";

// $db = new MySQL;
// $db->connect();
// echo "<br>";

// $table = new UsersTable;
// $table->insert();


use Libs\Database\MySQL;

$mysql = new MySQL;
$db= $mysql->connect();

$result = $db->query("SELECT * FROM users");
print_r( $result->fetch());

use Libs\Database\UsersTable;

 $table = new UsersTable(new MySQL);

 $id = $table->insert([
     "name" => "Tom",
    "email" => "tom@gmail.com",
    "phone" => "56789",
     "address" => "Address",
     "password" => "password",
 ]);

echo $id . "<br><br>";
print_r($table->getAll());