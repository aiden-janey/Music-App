<!DOCTYPE html>
<html lang="EN-US">

<head>
    <title>Music App | Home</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="icon" href="media/Music App-logos.jpeg">
</head>

<body>
    <div class="container">
        <?php include "scripts/connect.php"; ?>
        <header>
            <h1>LAMP Stack Music App</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="pages/addSong.php">Add Song</a></li>
                    <li>
                        <form action="search.php" method="post" id="search">
                            <input type="text" name="searchbar" placeholder="Search Song, Album, or Artist...">
                            <select name="queryoption">
                                <option value="Song">Song</option>
                                <option value="Album">Album</option>
                                <option value="Artist">Artist</option>
                            </select>
                            <input type="submit" value="Search">
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <table>
                <tr>
                    <th>Album Name</th>
                    <th>Genre</th>
                    <th>Artist</th>
                    <th>Song Name</th>
                    <th>Release Year</th>
                </tr>
                <?php
                $query = "SELECT * FROM songlib;";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['albumName'] . "</td>";
                        echo "<td>" . $row['genre'] . "</td>";
                        echo "<td>" . $row['artist'] . "</td>";
                        echo "<td>" . $row['songName'] . "</td>";
                        echo "<td>" . $row['releaseYear'] . "</td>";
                        echo "<td><a href=" . $row['fileLocation'] . " download>Download</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td>No Rows Fetched!<td></tr>";
                }
                ?>
            </table>
        </main>
        <footer>
            <p>Aiden Janey &copy; 2022</p>
        </footer>
    </div>
</body>

</html>