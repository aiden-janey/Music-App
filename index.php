<!DOCTYPE html>
<html lang="EN-US">

<head>
    <title>Music App</title>
</head>

<body>
    <?php
    include "scripts/connect.php";
    ?>
    <section>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pages/addSong.php">Home</a></li>
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
        <table>
            <tr>
                <th>Album Name</th>
                <th>Genre</th>
                <th>Artist</th>
                <th>Song Name</th>
                <th>Release Year</th>
            </tr>
            <?php
            $search = $REQUEST['searchbar'];
            if (empty($search)) {
                $query = "SELECT * FROM songlib;";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    $rowCounter = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>$rowCounter</td>";
                        echo "<td>" . $row['albumName'] . "</td>";
                        echo "<td>" . $row['genre'] . "</td>";
                        echo "<td>" . $row['artist'] . "</td>";
                        echo "<td>" . $row['releaseYear'] . "</td>";
                        echo "</tr>";
                        $rowCounter++;
                    }
                } else {
                    echo "No Rows Fetched!";
                }
            } else {
                $query = "SELECT * FROM musicTable WHERE albumName LIKE '%" . $search . "%'";
                $result = mysqli_query($connect, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>$rowCounter</td>";
                    echo "<td>" . $row['albumName'] . "</td>";
                    echo "<td>" . $row['genre'] . "</td>";
                    echo "<td>" . $row['artist'] . "</td>";
                    echo "<td>" . $row['releaseYear'] . "</td>";
                    echo "</tr>";
                    $rowCounter++;
                }
            }
            ?>
        </table>
    </section>
</body>

</html>