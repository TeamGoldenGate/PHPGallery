<?php
include "includes/application_top.php";
require_once "header.php";

?>

<div id="site_content">
  <div id="side_menu">
    <div class="side_menu_item"> <a href="#"><img src="style/series_one.jpg" alt="" width="142" height="50" /></a> <span class="info">Series_One</span> </div>
    <div class="side_menu_item"> <a href="#"><img src="style/series_two.jpg" alt="" width="142" height="50" /></a> <span class="info">Series_Two</span> </div>
    <div class="side_menu_item"> <a href="#"><img src="style/series_three.jpg" alt="" width="142" height="50" /></a> <span class="info">Series_Three</span> </div>
    <div class="side_menu_item"> <a href="#"><img src="style/series_four.jpg" alt="" width="142" height="50" /></a> <span class="info">Series_Four</span> </div>
    <div class="side_menu_item"> <a href="#"><img src="style/series_five.jpg" alt="" width="142" height="50" /></a> <span class="info">Series_Five</span> </div>
  </div>
  <div id="content">
    <h1>Gallery</h1>
    <p>Add gallery</p>
    <p></p>
    <form id="contact" method="post" action="#">
      <div class="row1"> <span class="formlabel">Gallery name</span> <span class="forminput">
        <input type="text" name="name" />
       	<select name="category">
		    	<option>Family</option>
		    	<option>Friends</option>
		    	<option>Work</option>
	    		<option>Seas</option>
	    		<option>Models</option>
        </select>
        </span> </div>
      <div class="row1"> <span class="formlabel"></span>Add picture<span class="forminput">
        <input type="file" name="picture" accept="image/*"/>
      </span> </div>
      <div class="row1"> <span class="formlabel"></span> <span class="forminput">
        <input type="submit" value="submit" class="submit" />
        </span> </div>
    </form>
  </div>
  <?php 
  	require_once 'NewGallery.php';
	include("application_top.php");
	// if (isset(htmlentities($_POST['picture']), htmlentities($_POST['submit'])
		 // $sql = "INSERT INTO `ourdatabase`.`albums` (`id`, `name`, `rating`, `category`) VALUES (NULL, $_POST['name'], '1', $_POST['category'])"
	    // if (mysqli_query($conn, $sql)) {
	        // echo "New record created successfully";
	    // } else {
	        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    // }
	// }
	include("application_bottom");
  ?>
</div>
<?php require_once "footer.php"?>
