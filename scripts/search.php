<?php
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