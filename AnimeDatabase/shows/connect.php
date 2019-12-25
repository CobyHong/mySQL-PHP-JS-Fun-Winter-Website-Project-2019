<?php
$jp_name    = filter_input(INPUT_POST, 'jp_name');
$en_name    = filter_input(INPUT_POST, 'en_name');
$year       = filter_input(INPUT_POST, 'year');
$genre      = filter_input(INPUT_POST, 'genre');
$season     = filter_input(INPUT_POST, 'season');
$link       = filter_input(INPUT_POST, 'link');

$host       = "localhost";
$dbusername = "coby";
$dbpassword = "";
$dbname     = "anime";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

//connection logical checks.
if (mysqli_connect_error())
{
    die('Connect Error');
}
else
{
    $sql = "INSERT INTO shows (jp_name, en_name, year, genre, season, link)
            values ('$jp_name','$en_name','$year','$genre','$season','$link')";

    if ($conn->query($sql))
    {
        header('Location: \AnimeDatabase\table\table.php');
    }
    else
    {
        echo "Error";
    }
    $conn->close();
}
?>