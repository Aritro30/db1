<?php

session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}
require_once "db.php";

$id = (int) $_GET['id'];
$sql = "DELETE FROM donors  WHERE id= $id ";;

if (mysqli_query($link, $sql)) {
    echo 'Deleted.';
    header('Location:http://localhost/370web/');
} else {
    echo 'Failed.';
    header('Location:http://localhost/370web/');
}




