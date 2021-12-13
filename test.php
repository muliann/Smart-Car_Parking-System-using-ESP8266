<?php
include_once 'database.php'; // Using database connection file here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $slot1 = $_GET['sensor1'];
                
    $sql = "INSERT INTO sensor_status (slot) VALUES ('$slot1')";
        
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
$conn->close();
}
   
?>