<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.18.18

        WhileLogic.php
     -->
    <title>Is Even</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>While Logic</h2>
    <!-- PHP begins here -->
    <?php
        $counter = 0;
        // This loops and adds a number to the numbers array until it reaches a 100.
        while($counter <= 100) {
            $numbers[] = $counter;
            $counter++;
        // This displays the numbers.
        } foreach ($numbers as $currentNum) {
            echo "$currentNum<br>";
        }
    ?>
</body>

</html>