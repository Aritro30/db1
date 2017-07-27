<?php

session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    session_destroy();
    header('Location:http://localhost/370web/login.php');
} else {
    header('Location:http://localhost/370web/login.php');
}
?>