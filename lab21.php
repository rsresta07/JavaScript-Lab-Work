<!-- Lab 21: Create a database named Students and insert five student records using PHP -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Students"; // The name of the database to create and use

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the database
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Select the database for use
$conn->select_db($dbname);

// Create the StudentRecord table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS StudentRecord (
     sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    rollno INT(6) NOT NULL,
    age INT(3) NOT NULL,
    address VARCHAR(100)
)";

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "<br>Table StudentRecord created successfully";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

// Prepare and execute the insertion query
$stmt = $conn->prepare("INSERT INTO StudentRecord (name, rollno, age, address) VALUES (?, ?, ?, ?)");
$stmt->bind_param("siss", $name, $rollno, $age, $address);

// Set parameters and execute the query
$name = "Ram";
$rollno = 1;
$age = 19;
$address = "Kathmandu";
$stmt->execute();

$name = "Ganesh";
$rollno = 2;
$age = 19;
$address = "Kritipur";
$stmt->execute();

$name = "Soham";
$rollno = 3;
$age = 20;
$address = "Pokhara";
$stmt->execute();

$name = "Gita";
$rollno = 6;
$age = 20;
$address = "Bitatnagar";
$stmt->execute();

$name = "Manish";
$rollno = 9;
$age = 21;
$address = "Chitwan";
$stmt->execute();

echo "<br>New record created successfully";

$stmt->close();
$conn->close();
?>
