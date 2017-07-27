<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}
require_once 'header.php';
?>


<form action="save.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Full  name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Photo</label>
        <input name="image" type="file" id="exampleInputFile">
        <p class="help-block">Example block-level help text here.</p>
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
</form>





<?php require_once 'footer.php'; ?>
