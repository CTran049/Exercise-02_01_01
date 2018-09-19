<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.19.18

        TempConversion.php
     -->
    <title>Temp Conversion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Temp Conversion</h2>
    <!-- PHP begins here -->
    <?php
        // This sets the fahrenheit and celsius to 0.
        $fahrenheit = 0;
        $celsius = 0;

        // This loops and adds 1 until the fahrenheit number reaches 100.
        while($fahrenheit <= 100) {
            // This variable rounds and does math to convert Fahrenheit to Celsius.
            $celsius = round((($fahrenheit - 32) * (5/9)), 1);
            // This displays and changes the font color for the output.
            echo "<font color=\"red\">$fahrenheit&#8457;</font> | <font color=\"blue\">$celsius&#8451;</font><br>";
            $fahrenheit++;
        }
    ?>
</body>

</html>