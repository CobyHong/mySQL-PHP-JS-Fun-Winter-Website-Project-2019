<?php

$host = "localhost";
$dbusername = "coby";
$dbpassword = "";
$dbname = "Anime";


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error())
{
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else
{
    $sql = "SELECT id, jp_name, en_name, year, genre, season, link FROM shows";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 
               "<tr><td><font color='#1E203E'>" . $row["id"]. "</font></td>
                    <td><font color='#EC846A'>" . $row["jp_name"] . "</font></td>
                    <td><font color='#5F5F5F'>" . $row["en_name"] . "</font></td>
                    <td><font color='#655E48'>" . $row["year"] . "</font></td>
                    <td><font color='#E78750'>" . $row["genre"] . "</font></td>
                    <td><font color='#3A7B8C'>" . $row["season"] . "</font></td>
                    <td><a href=" . $row["link"] . ">Link</a></td><tr>";
        }
        echo "</table>";
    }
    else { 
        echo "0 results"; 
    }
}
$conn->close();
?>