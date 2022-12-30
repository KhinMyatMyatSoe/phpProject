<?php

// session_start();
// unset($_SESSION['user']);

// header("Location:../index.php");

// ========================================


include("../vendor/autoload.php");

use Helpers\HTTP;

session_start();
unset($_SESSION['user']);
HTTP::redirect('/index.php');