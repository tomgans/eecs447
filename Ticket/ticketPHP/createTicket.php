<?php
    ini_set('display_errors', 1);
    $ticketID = $_POST["ticketID"];
    $userID = $_POST["userID"];
    $issue = $_POST["issue"];
    $description = $_POST["description"];
    $status = $_POST["status"];
    $dateCreated = $_POST["dateCreated"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "INSERT INTO Ticket (ticketID, userID, issue, description, status, dateCreated) VALUES ('$ticketID', '$userID', '$issue', '$description', '$status', '$dateCreated')";
    mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
?>