<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        HelloWorld.php
     -->
    <title>Hello World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <!-- PHP begins here -->
    <?php
        // Global Variables
        $worldVar = "world";
        $sunVar = "Sun";
        $moonVar = "Moon";
        $worldInfo = 92897000;
        $sunInfo = 72000000;
        $moonInfo = 3456;

        // Experiment with strings
        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is $worldInfo miles from the $sunVar.<br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately $sunInfo degrees Fahrenheit.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is $moonInfo miles in diameter.</p>";

        // Experiment with curly brace strings
        echo "This is a {$moonVar} embedded in double quotes.";
        echo "This is a $moonVarembedded in double quotes.";
    ?>
</body>

</html>