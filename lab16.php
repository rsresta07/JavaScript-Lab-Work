<!-- Write a PHP Program to set Cookie Variables -->
<?php
// Set the cookie variables
$cookieName = "user";
$cookieValue = "abcd";
$cookieExpiration = time() + (86400 * 30); // 30 days

// Set the cookie
setcookie($cookieName, $cookieValue, $cookieExpiration, "/");

// Display a message after setting the cookie
echo "Cookie '$cookieName' is set with value '$cookieValue'.";
?>
