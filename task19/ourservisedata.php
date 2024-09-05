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
// Check if form fields are filled
if(isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['text3']) && isset($_POST['text4'])  && isset($_POST['text5']) && isset($_POST['text6'])) {

    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
    $text3 = $_POST['text3'];
    $text4 = $_POST['text4'];
    $text5 = $_POST['text5'];
    $text6 = $_POST['text6'];
    
    $id = 1; // Assuming you have the ID of the record you want to update

    // Prepare SQL query
    $sqlupdate = "UPDATE `serves` SET text1=?, text2=?, text3=?, text4=?, text5=?, text6=? WHERE id=?";

    // Prepare statement
    $stmt = $conn->prepare($sqlupdate);

    // Bind parameters
   // Bind parameters
// Bind parameters
$stmt->bind_param("ssssssi", $text1, $text2, $text3, $text4, $text5, $text6,$id);




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