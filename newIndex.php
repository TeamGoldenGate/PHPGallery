<?php require_once "newHeader.php";?>
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

<?php require_once "newFooter.php";?>