<?php
include "includes/application_top.php";
require_once "header.php";

?>
  <div id="content">
    <h1>Gallery</h1>
    <p>Add gallery</p>
    <p></p>
    <form id="contact" method="post" action="addgallery.php" enctype="multipart/form-data">
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
              <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="picture" />
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

//	 if (isset($_POST['galleryname'], $_POST['category'])){
//         $galleryName = htmlentities($_POST['galleryname']);
//         $category = htmlentities($_POST['category']);
//         $uploaddir = './images/';
//         $uploadfile = $uploaddir . basename($_FILES['picture']['name']);
//         if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
//             echo "File is valid, and was successfully uploaded.\n";
//         } else {
//             echo "Possible file upload attack!\n";
//         }
//		 $sql = "INSERT INTO `ourdatabase`.`albums` ( `name`, `rating`, `category`) VALUES ('$galleryName', '0', '$category')";
//
//	     if (mysqli_query($conn, $sql)) {
//	         echo "New record created successfully";
//	     } else {
//	         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//	     }
//	 }
   ?>
</div>
<?php require_once "footer.php"?>































