<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joki_crud_yogie";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the "buku" table
$id = $_POST['id'];
$sql = "SELECT * FROM buku WHERE id = " . $id;
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Convert the array to a JSON string and print it
    echo json_encode($row);
} else {
    echo "No data found in the 'buku' table.";
}

// Close the database connection
$conn->close();