<!DOCTYPE html>
<html lang="EN-US">

<head>
    <title>Music App | Add Song</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>LAMP Stack Music App</h1>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Add Song</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="../scripts/upload.php" method="post" enctype="multipart/form-data">
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
        </main>
        <footer>
            <p>Aiden Janey &copy; 2022</p>
        </footer>
    </div>
</body>

</html>