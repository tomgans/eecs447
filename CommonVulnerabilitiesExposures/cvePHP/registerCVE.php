<?php
    ini_set('display_errors', 1);
    $CVEID = $_POST["CVEID"];
    $systemID = $_POST["systemID"];
    $description = $_POST["description"];
    $dateCreated = $_POST["dateCreated"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "INSERT INTO CommonVulnerabilitiesExposures (CVEID, systemID, description, dateCreated) VALUES ('$CVEID', '$systemID', '$description', '$dateCreated')";
    mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
?>