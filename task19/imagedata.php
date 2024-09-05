<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dana";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Check if form fields are filled
        if(isset($_POST['textone']) && isset($_POST['texttwo']) && isset($_FILES['photo1']['tmp_name']) && isset($_FILES['photo2']['tmp_name'])) {
            $textone = $_POST['textone'];
            $texttwo = $_POST['texttwo'];
    
            // Handle file upload for photo1
            $photo1_name = $_FILES['photo1']['name'];
            $photo1_tmp = $_FILES['photo1']['tmp_name'];
            $photo1_destination = 'uploads/' . $photo1_name;
            move_uploaded_file($photo1_tmp, $photo1_destination);
    
            // Handle file upload for photo2
            $photo2_name = $_FILES['photo2']['name'];
            $photo2_tmp = $_FILES['photo2']['tmp_name'];
            $photo2_destination = 'uploads/' . $photo2_name;
            move_uploaded_file($photo2_tmp, $photo2_destination);
    
            $id = 2; // Assuming you have the ID of the record you want to update
    
            // Prepare SQL query to update data in database
            $sqlupdate = "UPDATE `image` SET textone=?, texttwo=?, photo1=?, photo2=? WHERE id=?";
    
            // Prepare statement
            $stmt = $conn->prepare($sqlupdate);
    
            // Bind parameters
            $stmt->bind_param("ssssi", $textone, $texttwo, $photo1_destination, $photo2_destination, $id);
    
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
    }
    ?>
    
    
    
    


    
    
    
    
</body>
</html>