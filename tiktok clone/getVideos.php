<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="getVideos.css">

        <title>Watch Video</title>
    </head>
    <body>
        
        <div class="container">

            <?php

                require_once "conn.php";

                $res = $conn->query("SELECT * FROM videos ORDER BY ID DESC");

                while ($row = $res->fetch_assoc()) {

                    echo '<video controls autoplay>';
                    echo '<source src='.$row["location"].'>';
                    echo '</video>';
                }

                
            ?>
        </div>

    </body>
</html>