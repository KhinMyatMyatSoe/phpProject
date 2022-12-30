<?php

// session_start();

// $email = $_POST['email'];
// $password = $_POST['password'];

// if($email === 'admin@gmail.com' and $password === "admin123"){
//     $_SESSION['user'] = ['email' => "email@gmail.com"];
//     header("Location:../profile.php");
// }else {
//     header("Location:../index.php?incorrect=1");
// }

// ====================================================================

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);

$email = $_POST['email'];
$password =$_POST['password'];

$table= new UsersTable(new MySQL());

$user = $table->findByEmailAndPassword($email, $password);

if($user) {
	session_start();
	$_SESSION['user'] = $user;
	HTTP::redirect('/profile.php');

	if($table->suspended()){
		HTTP::redirect("/index.php",'suspended=1');
	}

	$_SESSION['user'] = $user;
	HTTP::redirect("/profile.php");

}else{
HTTP::redirect('/index.php', 'incorrect=1');

}

HTTP::redirect('/index.php', 'incorrect=login');