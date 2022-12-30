<?php

$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type =$_FILES['photo']['type'];

if($error){
    header("Location:../profile.php?error=file");
    exit();
}

if($type === "image/jpeg" or $type === "image/png"){
    move_uploaded_file($tmp,"photos/profile.jpg");
    header("Location:../profile.php");
}else{
    header("Location: ../profile.php?error=type");
} 