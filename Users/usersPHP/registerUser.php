<?php
    ini_set('display_errors', 1);
    $userID = $_POST["userID"];
    $password = $_POST["password"];
    $roles = "Analyst";
    $permissions = "rx";
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "INSERT INTO Users (userID, password, roles, permissions) VALUES ('$userID', '$password', '$roles', '$permissions')";
    mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
?>