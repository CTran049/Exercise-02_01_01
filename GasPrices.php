<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.18.18

        GasPrices.php
     -->
    <title>Gas Prices</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Gas Prices</h2>
    <!-- PHP begins here -->
    <?php
        // This variable changes the price of the gas.
        $gasPrice = 2.57;
        // This if else statement checks to see if the gasPrice variable is between 2 and 3 dollars or not. 
        if($gasPrice >= 2 && $gasPrice <= 3) {
            echo "<p>Gas prices are between $2.00 and $3.00.</p>";
        } else {
            echo "<p>Gas prices are not between $2.00 and $3.00.</p>";
        }
    ?>
</body>

</html>