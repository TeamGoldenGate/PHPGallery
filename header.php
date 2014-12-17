<? require_once("includes/application_top.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Golden Gate Gallery</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<link rel="stylesheet" type="text/css" href="styles/image-hover.css" />
</head>

<body>
	<div id="logo">
		<h1>Golden Gate Gallery</h1>
		</div>
	</div>
	<nav id="menu">
		<ul>
			<li><a class="selected" href="index.php">Gallery</a>
			</li>
			<li><a href="#">Upload Picture</a>
			</li>
			<li><a href="addgallery.php">Add Gallery</a>
			</li>
		</ul>
	</nav>
</body>
<div id="site_content">
    <?php include "gallery.php"; ?>
