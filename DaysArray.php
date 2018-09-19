<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.12.18

        DaysArray.php
     -->
    <title>Days Array</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Days Array</h2>
    <!-- PHP begins here -->
    <?php
        // This sets the array with the days of the month in English
        $days = array();
        $days[] = "Sunday, ";
        $days[] = "Monday, ";
        $days[] = "Tuesday, ";
        $days[] = "Wednesday, ";
        $days[] = "Thursday, ";
        $days[] = "Friday, ";
        $days[] = "Saturday";

        // This displays the days of the week in English
        echo "<p>The days of the week in English are: ", $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6], "</p>";

        // This reassigns the days of the week into French
        $days[0] = "Dimanche, ";
        $days[1] = "Lundi, ";
        $days[2] = "Mardi, ";
        $days[3] = "Mercredi, ";
        $days[4] = "Jeudi, ";
        $days[5] = "Vendredi, ";
        $days[6] = "Samedi";

        // This displays the days of the week in French
        echo "<p>The days of the week in French are: ", $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6], "</p>";
    ?>
</body>

</html>