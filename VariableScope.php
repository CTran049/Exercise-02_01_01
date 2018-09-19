<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.11.18

        VariableScope.php
     -->
    <title>Variable Scope</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Variable Scope</h2>
    <!-- PHP begins here -->
    <?php
        $globalVariable = "global variable";

        function scopeExample() {
            $localVariable = "local variable";
            echo "<p>This is a $localVariable</p>";
        }

        function globalExample() {
            global $globalVariable;
            echo "<p>This is a $globalVariable</p>";  
        }

        scopeExample();
        echo "<p>This is a $globalVariable</p>";
        globalExample();
    ?>
</body>

</html>