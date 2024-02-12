<?php
$db = mysqli_connect('localhost', 'root', '', 'joki_crud_yogie');

if (isset($_POST['id'])) {
    $id = (int) $_POST['id'];

    // Assuming the table name is 'buku' and the column name for the book ID is 'id'
    $sql = "DELETE FROM buku WHERE id = " . $id;

    // Execute the SQL query
    // Note: Uncomment the following lines if you have a valid connection object ($db) and want to perform the query
    $result = mysqli_query($db, $sql);
    
    // Check if the query was successful
    if ($result) {
        echo "Success";
    } else {
        echo "Error: " . mysqli_error($db); // Display any MySQL error message
    }
} else {
    echo "Error: Book ID is not set";
}
