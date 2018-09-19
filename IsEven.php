<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.12.18

        IsEven.php
     -->
    <title>Is Even</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Is Even</h2>
    <!-- PHP begins here -->
    <?php
        // This sets an array with 10 random numbers.
        $numbersArray = array(rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand());

        // This loops the code 10 times.
        for($i = 0; $i < 10; $i++) {
            // This gets the numbers from the array, divides it by 2, and then gets the remainder.
            $resultsArray = $numbersArray[$i] % 2;
            // This checks to see if the remainder is 0. If it's 0, then the number is even, otherwise it's odd.
            if($resultsArray == 0) {
                echo "$numbersArray[$i] is an even number<br>";
            } else {
                echo "$numbersArray[$i] is an odd number<br>";
            }
        }

    ?>
</body>

</html>