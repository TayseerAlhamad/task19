<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dana";

// Create a new connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Check if form fields are filled
if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']) && isset($_POST['text4']) && isset($_FILES['photo1']) && isset($_FILES['photo2'])) {
    // Sanitize and validate inputs
$text1 = htmlspecialchars($_POST['text1'], ENT_QUOTES, 'UTF-8');
$text2 = htmlspecialchars($_POST['text2'], ENT_QUOTES, 'UTF-8');
$text3 = htmlspecialchars($_POST['text3'], ENT_QUOTES, 'UTF-8');
$text4 = htmlspecialchars($_POST['text4'], ENT_QUOTES, 'UTF-8');
  
    // Upload photo1
    $file_tmp1 = $_FILES['photo1']['tmp_name'];
    $file_name1 = $_FILES['photo1']['name'];
    $target_dir = 'C:/xampp/htdocs/theend19/task19/uploads'; // Absolute file path
    $target_file1 = $target_dir . basename($file_name1);
    move_uploaded_file($file_tmp1, $target_file1);

    // Upload photo2
    $file_tmp2 = $_FILES['photo2']['tmp_name'];
    $file_name2 = $_FILES['photo2']['name'];
    $target_file2 = $target_dir . basename($file_name2);
    move_uploaded_file($file_tmp2, $target_file2);

    $id = 1; // Assuming you have the ID of the record you want to update

    // Prepare SQL query
    $sqlupdate = "UPDATE ourteam SET text1=?, text2=?, text3=?, text4=?, photo1=?, photo2=? WHERE id=?";
    
    // Prepare statement
    $stmt = $conn->prepare($sqlupdate);

    // Bind parameters
    $stmt->bind_param("ssssssi", $text1, $text2, $text3, $text4, $target_file1, $target_file2, $id);

    // Execute statement
    if ($stmt->execute()) {
        echo "Records updated successfully.";
    } else {
        echo "Error updating records: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Please fill all the fields and upload both photos.";
}

// Retrieve the URLs of the uploaded images
$sql_select = "SELECT photo1, photo2 FROM ourteam WHERE id = ?";
$stmt_select = $conn->prepare($sql_select);
$stmt_select->bind_param("i", $id);
$stmt_select->execute();
$stmt_select->bind_result($photo1_url, $photo2_url);
$stmt_select->fetch();
$stmt_select->close();

// Close the database connection
$conn->close();
?>