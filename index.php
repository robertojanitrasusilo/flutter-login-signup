<?php

$db = mysqli_connect('sql200.infinityfree.com', 'if0_35898056', 'WM7xYPCMGuXtWZ ', 'if0_35898056_tugas_uas');

if (isset($_POST['login'])) {
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
}