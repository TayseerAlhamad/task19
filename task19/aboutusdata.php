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
if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']) && isset($_POST['title1']) && isset($_POST['title2']) && isset($_POST['title3']) && isset($_FILES['photo'])) {
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $text3 = $_POST['text3'];
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $title3 = $_POST['title3'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_name = $_FILES['photo']['name'];
    $id = 2; // Assuming you have the ID of the record you want to update

    // Prepare SQL query
    $sqlupdate = "UPDATE `aboutas` SET text1=?, text2=?, text3=?, title1=?, title2=?, title3=?, photo=? WHERE id=?";

    // Prepare statement
    $stmt = $conn->prepare($sqlupdate);

    // Bind parameters
    $stmt->bind_param("sssssssi", $text1, $text2, $text3, $title1, $title2, $title3, $file_name, $id);

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

// Close the database connection
$conn->close();
?>