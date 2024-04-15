<?php
    ini_set('display_errors', 1);
    $user = $_POST["users"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "SELECT ticketID, issue, description, status, dateCreated FROM Ticket JOIN Users ON Ticket.userID = Users.userID WHERE name='$user'";
    $queryResult = mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
    if (mysqli_num_rows($queryResult) > 0)
    {

      while ($row = mysqli_fetch_assoc($queryResult))
      {
        echo $row["ticketID"].$row["issue"].$row["description"].$row["status"].$row["dateCreated"];
        echo "</br>";
      }
    }
?>