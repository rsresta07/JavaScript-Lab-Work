<!-- Lab 22: From the student table created in the last example, find the records of following students
a.Find all students whose age is between 19 and 29
b.Find all students who are from Biratnagar, Chitwan and Pokhara District
c.Find all students whose name starts with letter ‘S’
d.Find all students whose name ends with ‘a’ and is at least 4 characters long -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Students"; // The name of the database to create and use

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// a. Find all students whose age is between 19 and 29
$sqlA = "SELECT * FROM StudentRecord WHERE age BETWEEN 19 AND 29";
$resultA = $conn->query($sqlA);

if ($resultA->num_rows > 0) {
    echo "a. Students whose age is between 19 and 29:<br>";
    while ($rowA = $resultA->fetch_assoc()) {
        echo "Name: " . $rowA["name"] . ", Roll No: " . $rowA["rollno"] . ", Age: " . $rowA["age"] . ", Address: " . $rowA["address"] . "<br>";
    }
} else {
    echo "<br>No students found with age between 19 and 29.";
}

// b. Find all students who are from Biratnagar, Chitwan, and Pokhara District
$sqlB = "SELECT * FROM StudentRecord WHERE address IN ('Biratnagar', 'Chitwan', 'Pokhara')";
$resultB = $conn->query($sqlB);

if ($resultB->num_rows > 0) {
    echo "<br><br>b. Students from Biratnagar, Chitwan, and Pokhara District:<br>";
    while ($rowB = $resultB->fetch_assoc()) {
        echo "Name: " . $rowB["name"] . ", Roll No: " . $rowB["rollno"] . ", Age: " . $rowB["age"] . ", Address: " . $rowB["address"] . "<br>";
    }
} else {
    echo "<br>No students found from Biratnagar, Chitwan, & Pokhara District.";
}

// c. Find all students whose name starts with the letter 'S'
$sqlC = "SELECT * FROM StudentRecord WHERE name LIKE 'S%'";
$resultC = $conn->query($sqlC);

if ($resultC->num_rows > 0) {
    echo "<br><br>c. Students whose name starts with the letter 'S':<br>";
    while ($rowC = $resultC->fetch_assoc()) {
        echo "Name: " . $rowC["name"] . ", Roll No: " . $rowC["rollno"] . ", Age: " . $rowC["age"] . ", Address: " . $rowC["address"] . "<br>";
    }
} else {
    echo "<br>No students found with names starting with 'S'.";
}

// d.Find all students whose name ends with ‘a’ and is at least 4 characters long -->
// Modify the SQL query to find students whose name ends with 'a' and is at least 4 characters long
$sqlD = "SELECT * FROM StudentRecord WHERE name LIKE '%a' AND LENGTH(name) >= 4";
$resultD = $conn->query($sqlD);

if ($resultD->num_rows > 0) {
    echo "<br><br>d. Students whose name ends with 'a' & is at least 4 characters long:<br>";
    while ($rowD = $resultD->fetch_assoc()) {
        echo "Name: " . $rowD["name"] . ", Roll No: " . $rowD["rollno"] . ", Age: " . $rowD["age"] . ", Address: " . $rowD["address"] . "<br>";
    }
} else {
    echo "<br>No students found with names ending with 'a' & at least 4 characters long.";
}

