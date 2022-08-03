<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="main.css">

        <title>Add Video</title>
    </head>
    <body>

        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div>
                <input type="file" name="file" id="file" required>
            </div>
            <div>
                <label for="title">title</label><br>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="description">description</label><br>
                <input type="text" name="description" id="description" required>
            </div>
            <input type="submit" value="Add vedio" name="save">
        </form>

        <div class="videos" style="width: 70%;
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;">
            <a href="getVideos.php" style="text-decoration: none;
        text-align: center;
        color: #fff;">
        Videos</a>
        </div>

    </body>
</html>