<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}
require_once "db.php";

extract($_POST);  // Make all index as variable 


   // $add = md5($password);
    $sql = "UPDATE donors SET name='$name', email='$email', address='$address' WHERE id= $id ";


if (mysqli_query($link, $sql)) {
    echo 'Updated.';
    header('localhost/370web');
} else {
    echo 'Failed.';
    header('localhost/370web');
}




