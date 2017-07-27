<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    header('Location:http://localhost/370web/');
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="content">
        <form action="#" method="POST"> 
            <h3> Login for Managers</h3>  <br>....<br>       
            <input name="username" type="text" class="form-control" placeholder="Email address" >
                        
            <input name="password" type="password" class="form-control" placeholder="Type Password" autocomplete="off">
            <input type="submit" value="Log In"  >
        </form>
    </div>
    <div class="admin">
        <div class="names"><p>Admin Panel</p></div> 
        <ul>
            <li><img src="images/1.jpg"><p>Aritro Roy Arko</p></li>
            <li><img src="images/2.jpg"><p>Saadat Hasan Khan</p></li>
            <li><img src="images/3.jpg"><p>Mehrab Hossain Biswas</p></li>
            <li><img src="images/4.jpg"><p>Shiny Raisa</p></li>
            <li><img src="images/5.jpg"><p>Afia Anjum Preety</p></li>
            <li><img src="images/7.jpg"><p>Promi Hossain</p></li>
        </ul>

    </div>


</div>
</body>
</html>




<?php
if ($_POST && isset($_POST['username']) && isset($_POST['password'])) {
    extract($_POST);
    include_once 'db.php';
    $email = $link->real_escape_string($username);
    $password = $link->real_escape_string($password);
   // $password = md5($password);

    $sql = "SELECT * FROM managers WHERE email='$email' AND password='$password'  ";

    $result = mysqli_query($link, $sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $_SESSION['login'] = true;
        $_SESSION['name'] = $data['name'];
        header('Location:http://localhost/370web');
    } else {
        echo 'Login Failed.';
    }
}
?>