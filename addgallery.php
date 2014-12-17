<?php
include "includes/application_top.php";
require_once "header.php";

?>
  <div id="content">
    <h1>Gallery</h1>
    <p>Add gallery</p>
    <p></p>
    <form id="contact" method="post" action="#">
      <div class="row1">
          <span class="formlabel">Gallery name</span>
          <span class="forminput">
              <input type="text" name="galleryname" />
              <select name="category">
		    	<option>Family</option>
		    	<option>Friends</option>
		    	<option>Work</option>
	    		<option>Seas</option>
	    		<option>Models</option>
              </select>
          </span>
      </div>
      <div class="row1">
          <span class="formlabel">Add picture</span>
          <span class="forminput">
            <input type="file" name="picture" accept="image/*"/>
          </span>
      </div>
      <div class="row1">
          <span class="formlabel"></span>
          <span class="forminput">
              <input type="submit" value="submit" class="submit" />
          </span>
      </div>
    </form>
  </div>
    <?php
  	 require_once 'NewGallery.php';
	 include("application_top.php");
	 if (isset($_POST['galleryname'], $_POST['category'], $_POST['picture'])){
         $galleryName = htmlentities($_POST['galleryname']);
         $category = htmlentities($_POST['category']);
         $picture = htmlentities($_POST['picture']);
		 $sql = "INSERT INTO `ourdatabase`.`albums` (`id`, `name`, `rating`, `category`)
                  VALUES (NULL, " . $galleryName.", '1', ".$category.")";
	     if (mysqli_query($conn, $sql)) {
	         echo "New record created successfully";
	     } else {
	         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	     }
	 }
	 include("application_bottom");
   ?>
</div>
<?php require_once "footer.php"?>
