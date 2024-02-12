<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

$db = mysqli_connect('localhost', 'root', '', 'joki_crud_yogie');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
