<?php
require_once "header.php";
if (isset($_GET['album_id'])) {
    $album_id = $_GET['album_id'];
    $albumQuery = "SELECT `album_id`, `album_name`, `rating`, `category`, `user_id` FROM `albums` WHERE `album_id` = '$album_id'";
    $result = $conn->query($albumQuery);
    if ($result) {
        $row = $result->fetch_assoc();
        $album_name = $row['album_name'];
    }

    $pictureQuery = "SELECT `picture_id`, `name`, `album_id`, `user_id` FROM `pictures` WHERE `album_id` = '$album_id'";
    $result1 = $conn->query($pictureQuery);
}
?>
    <div class="main">
        <header>
            <h1><?php echo $album_name; ?></h1>
        </header>
        <section>
            <p>Photos in album <strong><?php echo $album_name; ?></strong></p>
            <?php
            if ($result1) {
                while($row = $result1->fetch_assoc()) {
                    $picture_name = $row['name'];
                    $picture_id = $row['picture_id'];
                    ?>
                    <div class="picture">
                        <h2><?php echo $picture_name; ?></h2> 
                        <img src="<?php echo $picture_name; ?>" alt="picture<?php echo $picture_id; ?>" />
                        <p>
                            <span class="uploadedBy">Uploaded by: <strong><?php echo getAuthor($picture_id); ?></strong></span>
                        </p>
                    </div>
                    <?php
                }
            }
            ?>
        </section>
    </div>

<?php require_once "footer.php";?>