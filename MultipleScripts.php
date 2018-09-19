<!DOCTYPE html>
<html>

<head>
    <!-- 
        Exercise-02_01_01

        Author: Charley Tran
        Date: 9.10.18

        MultipleScripts.php
     -->
    <meta charset="utf-8">
    <title>PHP Environment Info</title>
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h1>PHP Environment Info</h1>
    <p>
        The PHP code was rendered with PHP version 
        <?php
        echo phpversion();
        ?>
        <p>The PHP code was rendered with Zend Engine version
        <?php
        echo zend_version();
        ?>
        </p>
        <p>PHP's default MIME type is
        <?php
        echo ini_get("default_mimetype");
        ?>
        </p>
        <p>The maximum allowable execution time of a PHP script is
        <?php
        echo ini_get("max_execution_time");
        ?>
        </p>
    </p>
</body>

</html>