<?php
include_once 'database.php'; // Using database connection file here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $slot1 = $_GET['httpRequestData'];
     

    $sql = "INSERT INTO sensor_status (status) VALUES ('$slot1')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
$conn->close();
}
   
?>