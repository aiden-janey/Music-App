<!DOCTYPE html>
<html lang="EN-US">

<head>
    <title>Music App | Add Song</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <?php
    include "scripts/connect.php";
    ?>
    <section>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="addSong.php">Add Song</a></li>
        </ul>
        <form action="" method="post">
            <input type="text" name="searchbar" placeholder="Search Song, Album, or Artist...">
            <select name="queryoption">
                <option value="Song">Song</option>
                <option value="Album">Album</option>
                <option value="Artist">Artist</option>
            </select>
            <input type="submit" value="Search">
        </form>
    </section>
    <section>
        <form action="addToLib.php" method="post">
            <label>Album Name</label>
            <input type="text" name="albumName"><br>
            <label>Genre</label>
            <input type="text" name="genre"><br>
            <label>Artist</label>
            <input type="text" name="artist"><br>
            <label>Song Name</label>
            <input type="text" name="songName"><br>
            <label>Release Year</label>
            <input type="number" name="releaseYear"><br>
            <label>Song File</label>
            <input type="file" name="songFile"><br>
            <input type="submit" value="Add Song">
        </form>
    </section>
</body>

</html>