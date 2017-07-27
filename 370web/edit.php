<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/370web/login.php');
}

require_once 'header.php';
include_once 'db.php';


$data = null;


$user_id = $_GET['id'];

$user_id = $link->real_escape_string($user_id);

$query = "SELECT name,email FROM donors WHERE id=$user_id";
$result = $link->query($query);

$num_result = $result->num_rows;

if ($num_result > 0) {

    while ($rows = $result->fetch_assoc()) {

        $data[] = $rows;
    }
}

//var_dump($data);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="container">

    <form action="update.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName" placeholder="Full  name" value="<?php echo $data[0]['name'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $data[0]['email'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter New Password or, leave blank">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Photo</label>
            <input name="image" type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <input type="hidden" name="id" value="<?=$user_id ?>" />

        <button type="submit" class="btn btn-default">Update</button>
    </form>


</div>



<?php require_once 'footer.php'; ?>
