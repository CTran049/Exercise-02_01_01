<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        HelloWorld2.php
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
        define("WORLD_INFO", 92897000);
        define("SUN_INFO", 72000000);
        define("MOON_INFO", 3456);

        // Experiment with strings
        echo "<p>Hello $worldVar!<br>";
        echo "The $worldVar is ", number_format(WORLD_INFO, 0), " miles from the $sunVar.<br>";
        echo "Hello ", $sunVar, "!<br>";
        echo "The $sunVar's core temperature is approximately ", number_format(SUN_INFO, 2), " degrees Fahrenheit.<br>";
        echo "Hello ", $moonVar, "!<br>";
        echo "The $moonVar is ", number_format(MOON_INFO, 0), " miles in diameter.</p>";

        // Experiment with curly brace strings
        echo "This is a {$moonVar} embedded in double quotes.";
        echo "This is a $moonVarembedded in double quotes.";
    ?>
</body>

</html>