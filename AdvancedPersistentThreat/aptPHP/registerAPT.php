<?php
    ini_set('display_errors', 1);
    $number = $_POST["number"];
    $overview = $_POST["overview"];
    $targetSectors = $_POST["targetSectors"];
    $previousAttacks = $_POST["previousAttacks"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "INSERT INTO AdvancedPersistentThreat (number, overview, targetSectors, previousAttacks) VALUES ('$number', '$overview', '$targetSectors', '$previousAttacks')";
    mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
?>