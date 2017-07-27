<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}
require_once 'header.php';
?>

HEllo All!!

<?php require_once 'footer.php'; ?>
