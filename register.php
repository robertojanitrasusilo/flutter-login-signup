<?php
$db = mysqli_connect('sql200.infinityfree.com', 'if0_35898056', 'WM7xYPCMGuXtWZ ', 'if0_35898056_tugas_uas');


if (isset($_POST['email']) && isset($_POST['password'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "Error";
    } else {
        $sql = "INSERT INTO login (nama, email, password) VALUES ('$nama','$email', '$password')";
        $result = mysqli_query($db, $sql);
        echo "Success";
    }
} else {
    echo "Error: email or password not set";
}
