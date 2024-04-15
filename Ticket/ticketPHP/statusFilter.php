<?php
    ini_set('display_errors', 1);
    $status = $_POST["status"];
    $connection = mysqli_connect('mysql.eecs.ku.edu', '447s24_s661a552', 're9oCeeN') or die('Could not connect: ' . mysql_error());
    mysqli_select_db($connection, '447s24_s661a552') or die('Could not select database');
    $query = "SELECT * FROM Ticket WHERE status = '$status'";
    $queryResult = mysqli_query($connection, $query) or die('Query failed: ' . mysql_error());
    if (mysqli_num_rows($queryResult) > 0)
    {

      while ($row = mysqli_fetch_assoc($queryResult))
      {
        echo $row["ticketID"].$row["userID"].$row["description"];
        echo "</br>";
      }
    }
?>