<!DOCTYPE html>
<html>
    <head>
        <title>Anime Database</title>
    </head>
    <body>
        <b class="font">Anime DB Table |</b>
        <b><nobr><a class ="bar" href="\AnimeDatabase\shows\index.html">Insert Show</a></nobr><b><br><br>
        <table>
            <tr>
                <th> ID # </th>
                <th>JP Title</th>
                <th>EN Title</th>
                <th>Year</th>
                <th>Genre</th>
                <th>Season</th>
                <th>Link</th>
            </tr>
            <?php include('connect.php');?>
        </table>
    </body>
</html>



<style>
    table {
        border-radius: 10px;
        border-collapse: collapse;
        width: 100%;
        color: #AD9B79;
        font-family: 'Sergio UI';
        font-size: 13px;
        text-align: left;
    }
    th {
        background-color: #403F4E;
        color: white;
    }
    tr {
        background-color: #D3D3D3;
        opacity: 90%;
    }
    body 
    {
        background-image: url("back3.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .font {
        font-style:italic;
        margin-left: 20px;
        color: #DB9068;
        font-size: 200%;
        font-weight: bolder;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: -webkit-linear-gradient(#E3594A, #C23C4A);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    a {
        align: right;
        margin-right:10px;
        font-style: italic;
        color: #5B1C3B;
        text-decoration: none;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    a.bar {
        color: #401735;
    }
</style>