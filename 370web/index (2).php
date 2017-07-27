<?php

include 'db.php';
echo '<pre>';
var_dump($_REQUEST);

var_dump($_FILES);
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$address= $_REQUEST['address'];
$age = $_REQUEST['age'];
$gender = $_REQUEST['gender'];
$blood = $_REQUEST['blood'];



/* Prepare an insert statement */
$query = "INSERT INTO donors (name,email,phone,address,age,gender,blood) VALUES ('$name','$email','$phone','$address','$age','$gender','$blood')";
$stmt = $link->prepare($query);
/* Execute the statement */
if ($stmt->execute()) {
    echo 'Inserted' . PHP_EOL;
} else {
    echo 'Not Inserted  or, already exist' . PHP_EOL;
}
