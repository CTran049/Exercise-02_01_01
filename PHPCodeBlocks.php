<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.10.18

        PHPCodeBlocks.php
     -->
    <meta charset="utf-8">
    <title>PHP Code Blocks</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <p>
        <h3>This is HTML</h3>
        <!-- PHP begins here -->
        <?php
            // Displays the text on the web browser.
            echo "This text is displayed using standard PHP script delimiters.<br>";
            print "Second string";
            print ("<br>Third string");
            echo "<h1>This is a" , " multiple argument string.</h1>";
            echo ("<h1>This is a" . " multiple argument string.</h1>");
            print("<h2>This is some math: " );
        ?>
    </p>
</body>

</html>