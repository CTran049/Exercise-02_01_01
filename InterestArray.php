<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.12.18

        InterestArray.php
     -->
    <title>Interest Array</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Interest Array</h2>
    <!-- PHP begins here -->
    <?php
        // This sets the variables 
        $interestRate1 = .0725;
        $interestRate2 = .0750;
        $interestRate3 = .0775;
        $interestRate4 = .0800;
        $interestRate5 = .0825;
        $interestRate6 = .0850;
        $interestRate7 = .0875;

        // This creates an array with all the variables from above.
        $ratesArray = array($interestRate1, $interestRate2, $interestRate3, $interestRate4, $interestRate5, $interestRate6, $interestRate7);

        // This displays the array
        echo "$ratesArray[0]<br>";
        echo "$ratesArray[1]<br>";
        echo "$ratesArray[2]<br>";
        echo "$ratesArray[3]<br>";
        echo "$ratesArray[4]<br>";
        echo "$ratesArray[5]<br>";
        echo "$ratesArray[6]<br>";
    ?>
</body>

</html>