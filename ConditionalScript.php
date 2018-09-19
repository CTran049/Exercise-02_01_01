<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        ConditionalScript.php
     -->
    <title>Conditional Script</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Conditional Script</h2>
    <!-- PHP begins here -->
    <?php
        // This variable is used to test
        $intVariable = 101;
        $result = "";
        // This checks to see if the intVariable is greater than a 100 or less than or equal to 100.
        if ($intVariable > 100) {
            $result = '$intVariable is greater than 100';
        } else {
            $result = '$intVariable is less than or equal to 100';
        }
        // This displays the information
        echo '<h3>$result: ' . "$result</h3>";
    ?>
</body>

</html>