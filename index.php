<?php require_once "header.php";
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="scripts/slider.js" defer></script>
<div id="slider">
	<ul class="slides">
		<?php
			$fi = new FilesystemIterator("./images/");
			$counter = 1;
			foreach($fi as $file) {
		?>
		<li class="slide slide<?php $counter++; ?>"><img src="<?= $file->getPathname(); ?>"></li>
		<?php } if($counter > 1) { $fi->rewind(); } ?>
		<li class="slide slide1"><img src="<?php echo $fi->key(); ?>"></li>
	</ul>
</div>
<section id="newPhotos">
    <?php
    $picturesQuery = "SELECT `picture_id`, `name`, `album_id`, `user_id` FROM `pictures` ORDER BY `picture_id` DESC LIMIT 6";
    $result = $conn->query($picturesQuery);
    if ($result) {
        while($row = $result->fetch_assoc()) {
        ?>
        <div class="newPicture">
            <h2><?php echo $row['name']; ?></h2>
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