<!-- Write a PHP Program to set session variables and display them -->
<?php
//session start
session_start();
?>
<html>
    <body>
        <?php
        //Set session variable
        $_session["name"]="salin";
        $_session["age"]="21";
        echo"Session variable is set<br>";
        //retriving session variavle
        echo"name:". $_session["name"]."<br>";
        echo"age:". $_session["age"];
        


        ?>
</body>

</html>
