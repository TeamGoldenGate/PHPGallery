<?php
require_once "header.php";
if (isset($_GET['picture_id'])) {
    $picture_id = $_GET['picture_id'];
    $pictureQuery = "SELECT `picture_id`, `name`, `album_id`, `user_id` FROM `pictures` WHERE `picture_id` = '$picture_id'";
    $result = $conn->query($pictureQuery);
    if ($result) {
        $row = $result->fetch_assoc();
        $picture_name = $row['name'];
    }
}
?>
    <div class="main">
        <header>
            <h1><?php echo $picture_name; ?></h1>
        </header>
        <div class="picture">
            <img src="<?php echo $picture_name; ?>" alt="<?php echo $picture_id; ?>" />
        </div>
        <footer>
            <p>
                <span class="uploadedBy">Uploaded by: <strong><?php echo getAuthor($row['picture_id']); ?></strong></span>
                <span class="inAlbum">This picture is in album <strong><?php echo getAlbumName($row['picture_id']); ?></strong></span>
            </p>
        </footer>
    </div>

<?php require_once "footer.php";?>