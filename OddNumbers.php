<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        OddNumbers.php
     -->
    <title>Odd Numbers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Odd Numbers</h2>
    <!-- PHP begins here -->
    <?php
        // This is a global variable. Sets the number variable to 1.
        $number = 1;
        // This is a loop. It loops until the number variable reaches 100.
        while($number <= 100) {
        // This variable finds the remainder to determine if the number is odd or even.
        $result = $number % 2;
            // This if else statement checks to see if the remainder is 0 or 1. If it's 1, then the number is odd and is displayed. If it's 0, then the number is even and is not displayed.
            if($result == 1) {
                echo "<p>$number</p>";
                $number++;
            } else {
                echo "";
                $number++;
            }
        }
    ?>
</body>

</html>