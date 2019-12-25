<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

        $host = "localhost";
        $dbusername = "coby";
        $dbpassword = "";
        $dbname = "Anime";

        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else 
        {
            $sql = "SELECT username, password FROM users";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    if($row["username"] == $username)
                    {
                        if($row["password"] == $password)
                        {
                            header('Location: \AnimeDatabase\shows\index.html');
                            $conn->close();
                            exit();
                        }
                    }
                }
                //header('Location: index.html');
                echo 
                "<script>
                    window.location.href='index.html';
                </script>";
                echo
                "<script>
                    document.getElementById('Fail').innerHTML = 'failed';
                </script>";
                $conn->close();
            }
        }

?>