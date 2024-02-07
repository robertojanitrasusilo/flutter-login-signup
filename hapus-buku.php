<?php
$db = mysqli_connect('localhost', '', 'WM7xYPCMGuXtWZ ', 'if0_35898056_tugas_uas');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Assuming the table name is 'buku' and the column name for the book ID is 'id'
    $sql = "DELETE FROM buku WHERE id = $id";

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
