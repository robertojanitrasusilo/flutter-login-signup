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
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Fetch all rows into an array
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    // Convert the array to a JSON string and print it
    echo json_encode($rows);
} else {
    echo "No data found in the 'buku' table.";
}

// Close the database connection
$conn->close();