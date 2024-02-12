<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$db = mysqli_connect('localhost', 'root', '', 'joki_crud_yogie');
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        $isAdmin = $row['isAdmin'];
        if ($isAdmin == 1) {
            # code...
            echo "Admin";
        } else {
            echo "Success";    
        } // Get the isAdmin column value
    } else {
        echo "Email or password is wrong";
    }
}