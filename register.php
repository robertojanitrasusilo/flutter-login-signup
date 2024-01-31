<?php
$db = mysqli_connect('localhost', 'root', '', 'joki_crud_yogie');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM LOGIN WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo json_encode("Error");
    } else {
        $sql = "INSERT INTO LOGIN (email, password) VALUES ('$email', '$password')";
        $result = mysqli_query($db, $sql);
        echo json_encode("Success");
    }
} else {
    echo json_encode("Error: email or password not set");
}
