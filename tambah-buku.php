<?php
$db = mysqli_connect('sql200.infinityfree.com', 'if0_35898056', 'WM7xYPCMGuXtWZ ', 'if0_35898056_tugas_uas');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['nama']) && isset($_POST['penerbit']) && isset($_POST['penulis']) && isset($_POST['tahun']) && isset($_POST['deskripsi']) && isset($_FILES['foto'])) {
    $nama = $_POST['nama'];
    $penerbit = $_POST['penerbit'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    // File handling
    $foto = $_FILES['foto'];
    $fotoName = uniqid() . '_' . $foto['name']; // Unique filename
    $encodedFotoName = urlencode($fotoName); // URL-encoded filename
    $fotoPath = 'foto/' . $encodedFotoName; // Relative path to the 'foto' folder

    // Move the uploaded file to the 'foto' folder
    move_uploaded_file($foto['tmp_name'], $fotoPath);

    // Assuming the table name is 'buku' and the column names are 'penerbit', 'penulis', 'tahun', 'deskripsi', 'foto', 'tersedia'
    $sql = "INSERT INTO buku (nama, penerbit, penulis, tahun, deskripsi, foto, harga) VALUES ('$nama','$penerbit', '$penulis', '$tahun', '$deskripsi', '$fotoPath', '$harga')";

    // Execute the SQL query
    $result = mysqli_query($db, $sql);
    
    // Check if the query was successful
    if ($result) {
        echo "Success";
    } else {
        echo "Error: " . mysqli_error($db); // Display any MySQL error message
    }
} else {
    echo "Error: One or more form fields are not set";
}
?>