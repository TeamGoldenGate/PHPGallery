<?php require_once "header.php";
?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts/slider.js" defer></script>
    <div id="slider">
        <ul class="slides">
            <?php
            $html = "";
            $sql = "SELECT * FROM `albums`";
            $counter = 1;
            $result = $conn->query($sql);
            if ($result) {
                while($row = $result->fetch_assoc()) {
                    $html .=  '<li class="slide slide'.$counter++.'"><a href="index.php?album='. $row['album_id'].'"><img src="' . $row['pic'] . '"></a></li>';
                }
                $html .=  '<li class="slide slide'.$counter++.'"><a href=""><img src=""></a></li>';
                echo $html;
            }
            ?>
        </ul>
    </div>
    <section id="newPhotos">
        <?php
        $min_album_id = $conn->query("SELECT MIN(`album_id`) FROM `albums`");
        $album_id = $min_album_id->fetch_row();
        if (isset($_GET['album']) && $_GET['album'] != "") {
            $album_id[0] = $_GET['album'];
        }

        $picturesQuery = "SELECT `picture_id`, `name`, `picturename`, `album_id`, `user_id` FROM `pictures` WHERE `album_id` = ".$album_id[0]." ORDER BY `picture_id` DESC LIMIT 6";
        $result = $conn->query($picturesQuery);
        if ($result) {
            while($row = $result->fetch_assoc()) {
                ?>
                <div class="newPicture">
                    <h2><?php echo $row['picturename']; ?></h2>
                    <img src="<?php echo $row['name']; ?>" alt="picture<?php echo $row['picture_id']; ?>" />
                    <p>
                        <span class="uploadedBy">Uploaded by: <strong><?php echo getAuthor($row['picture_id']); ?></strong></span>
                        <span class="inAlbum">This picture is in album <strong><?php echo getAlbumName($row['picture_id']); ?></strong></span>
                    </p>
                </div>
            <?php
            }
        }
        ?>
    </section>

<?php require_once "footer.php";?>