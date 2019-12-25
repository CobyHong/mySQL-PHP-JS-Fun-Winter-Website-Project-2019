<?php
    $message = "";
    if(isset($_POST['Submit']))
    { 
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
                $message = "<div>Incorrect username or password. <br>Try again!</div>";
                $username = NULL;
                $password = NULL;
                $conn->close();
            }
        }
    }    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Anime Database</title>
    </head>
    <body >
        <b class="font">Anime DB Login |</b>
        <b><nobr><a href="\AnimeDatabase\table\table.php">View Table</a></nobr><b>
            <form method="post" action="">
                <br><input type="text" name="username" placeholder="Username"><br>
                <br><input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" name="Submit" value="Submit">
            </form>
            <?php echo $message; ?>
    </body >
</html>

<style>
    body 
    {
        background-image: url("back1.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    input[type=submit] {
        letter-spacing: 3px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: italic;
        color: rgb(233, 233, 233), 229, 227);
        font-size: 15px;
        width: 20%;
        background-color: #464CBC;
        color: white;
        padding: 15px 20px;
        margin: 10px 0;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);
    }
    input[type=submit]:hover {
        background-color: rgb(30, 36, 155);
    }
    input[type=text], select {
        font-style:italic;
        font-weight: 500;
        color: #4B4EBF;
        letter-spacing: 3px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 10px;
        width: 20%;
        padding: 10px 50px;
        display: inline-block;
        box-sizing: border-box;
        clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);
    }
    input[type=password], select {
        font-style:italic;
        font-weight: 500;
        color: #4B4EBF;
        letter-spacing: 3px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 10px;
        width: 20%;
        padding: 10px 50px;
        display: inline-block;
        box-sizing: border-box;
        clip-path: polygon(10% 0%, 100% 0%, 90% 100%, 0% 100%);
    }
    .font {
        font-style:italic;
        margin-left: 20px;
        color: #B86DCD;
        font-size: 200%;
        font-weight: bolder;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: -webkit-linear-gradient(#B86DCD, rgb(159, 65, 185));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    a {
        font-style: italic;
        text-decoration: none;
        margin-right:10px;
        color: white;
        align: right;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    div {
        color: white;
        padding: 0;
        border: 2px dotted #96DAD9;
        width: 250px;
    }
</style>

