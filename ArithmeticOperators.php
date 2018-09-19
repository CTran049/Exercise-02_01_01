<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        ArithmeticOperators.php
     -->
    <title>Arithmetic Operators</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <!-- PHP begins here -->
    <?php
    echo "<h1>Arithmetic Operators</h1>";
        // Addition
        $x = 100;
        $y = 200;
        $returnValue = $x + $y;
        echo "<h2>Addition</h2>";
        echo '<p>$returnValue after addition expression: ', $returnValue, "</p>";

        // Subtraction
        $x = 10;
        $y = 7;
        $returnValue = $x - $y;
        echo "<h2>Subtraction</h2>";
        echo '<p>$returnValue after subtraction expression: ', $returnValue, "</p>";

        // Division
        $x = 24;
        $y = 3;
        $returnValue = $x / $y;
        echo "<h2>Division</h2>";
        echo '<p>$returnValue after division expression: ', $returnValue, "</p>";

        // Modulus
        $x = 10;
        $y = 7;
        $returnValue = $x % $y;
        echo "<h2>Modulus</h2>";
        echo '<p>$returnValue after modulus expression: ', $returnValue, "</p>"; 

        // Unary
        echo "<h2>Unary increment: Prefix Notation</h2>";
        $studentID = 100;
        $curStudentID = ++$studentID;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = ++$studentID;
        echo "The third student ID is: ", $curStudentID, "<br>";

        echo "<h2>Unary increment: Postfix Notation</h2>";
        $studentID = 100;
        $curStudentID = $studentID++;
        echo "The first student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The second student ID is: ", $curStudentID, "<br>";
        $curStudentID = $studentID++;
        echo "The third student ID is: ", $curStudentID, "<br>";

        echo"<h1>Assignment Operators</h1>";
        $number = 100;
        $number += 50;
        echo '$number: ', $number;

        echo"<h1>Conditional Operators</h1>";
        $value1 = "First text string";
        $value2 = "Second text string";
        $returnValue = ($value1 == $value2) ? "true" : "false";
        echo '$returnvalue is: ', $returnValue;
    ?>
</body>

</html>