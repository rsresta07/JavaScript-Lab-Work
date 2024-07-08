<!-- Write a PHP Program to create a file, write your information in that file and display it in browser. -->
<?php
// Information to be written into the file
$name = "Salin Manandhar";
$age = 21;
$address = "Basantapur, Kathmandu";

// File path and name
$filename = "information.txt";

// Open the file in write mode
$file = fopen($filename, "w");

// Check if the file was opened successfully
if ($file === false) {
    echo "Error opening the file.";
} else {
    // Write information into the file
    fwrite($file, "Name: " . $name . "<br>");
    fwrite($file, "Age: " . $age . "<br>");
    fwrite($file, "Address: " . $address . "\n");

    // Close the file
    fclose($file);

    // Display the contents of the file
    echo "<h2>File Contents:</h2>";
    readfile($filename);
}
?>
