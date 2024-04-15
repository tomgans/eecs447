<?php
    ini_set('display_errors', 1);
    $TTPID = $_POST["TTPID"];
    $URL = $_POST["URL"];
    $description = $_POST["description"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "INSERT INTO DefensiveTTP (TTPID, URL, description) VALUES ('$TTPID', '$URL', '$description')";
    mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
?>