<?php
$album_name = $_REQUEST["albumName"];
$genre = $_REQUEST["genre"];
$artist = $_REQUEST["artist"];
$song_name = $_REQUEST["songName"];
$release_year = $_REQUEST["releaseYear"];
$song_file = $_FILES["songFile"]["name"];
$target_dir = "songs/";

include "connect.php";

move_uploaded_file($song_file, "../" . $target_dir);

$query = "INSERT INTO songlib VALUES (" . $album_name . ", "
    . $genre . ", " . $artist . ", " . $song_name . ", " . $release_year . ", "
    . $target_dir . $song_file . ");";

$result = mysqli_query($connect, $query);

header("Location: ../");