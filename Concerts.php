<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.10.18

        Concerts.php
     -->
    <title>Concerts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>Central Valley Civic Center</h1>
    <h2>Summer Concert Season</h2>
    <!-- PHP begins here -->
    <?php
    $concerts = array("Jimmy Buffet", "Chris Isaak", "Bonnie Raitt", "James Taylor", "Alicia Keys");
    $concerts[] = "Bob Dylan";
    $concerts[] = "Ryan Cabrera";

    echo "<p>The following ", count($concerts), " concerts are scheduled:</p><p>";
    echo "$concerts[0]<br>";
    echo "$concerts[1]<br>";
    echo "$concerts[2]<br>";
    echo "$concerts[3]<br>";
    echo "$concerts[4]<br>";
    echo "$concerts[5]<br>";
    echo "$concerts[6]</p>";

    echo "<pre>";
    print_r($concerts);
    echo "</pre>";
    echo "<pre>";
    var_dump($concerts);
    echo "</pre>";
    ?>
</body>

</html>