<?php

$db = mysqli_connect('localhost', 'root', '', 'joki_crud_yogie');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    # code...
    echo json_encode("Success");
} else {
    echo json_encode("Error");
}