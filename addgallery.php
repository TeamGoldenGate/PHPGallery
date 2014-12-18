<?php
require_once "header.php";
if (isset($_COOKIE['loggedUser'])) {
    $user_id = (int)$_COOKIE['currentUserId'];
    ?>
    <div id="content">
        <h1>MAKE YOUR Gallery</h1>
        <p>Add gallery</p>
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
                  <option>Natural</option>
                  <option>Models</option>
              </select>
          </span>
            </div>
            <div class="row1">
                <span class="formlabel">Add picture</span>
              <span id="forminput">
                  <input type="button" name="add" value="+" id="add" onClick="addClone('addpic')">
              </span>
            </div>
            <div class="row1" id="addpic">
                <!--              <div id="newpic">-->
                <!--                  <input type="text" name="picturename[]" placeholder="Picture Name"/>-->
                <!--                  <input type="file" name="picture[]" id="uploadImage"  onchange="PreviewImage(this);"/>-->
                <!--                  <a href="#nogo">-->
                <!--                      <img src="" id="uploadPreview" onClick="removeClone(this, 'newpic', 'addpic')"/>-->
                <!--                  </a>-->
                <!--              </div>-->
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
    if (isset($_POST['galleryname'], $_POST['category']) && $_POST['galleryname'] != "" && $_POST['category'] != "") {
        $galleryName = htmlentities($_POST['galleryname']);
        $category = htmlentities($_POST['category']);
        $sql = "INSERT INTO `phpteamwork`.`albums` ( `album_name`, `rating`, `category`, `user_id`) VALUES ('$galleryName', '0', '$category', '$user_id')";
        $albumId = mysqli_query($conn, "SELECT MAX(`album_id`) FROM `phpteamwork`.`albums`");
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            $albumId = mysqli_insert_id($conn);
            $uploadDir = './images/';
            for ($i = 0; $i < count($_FILES['picture']['name']); $i++) {
                $tmpFilePath = $_FILES['picture']['tmp_name'][$i];
                if ($tmpFilePath != "") {
                    $uploadFilePath = $uploadDir . basename($_FILES['picture']['name'][$i]);
                    $picturename = $_POST['picturename'][$i];
                    if (move_uploaded_file($tmpFilePath, $uploadFilePath)) {
                        $sql = "INSERT INTO `phpteamwork`.`pictures` ( `name`,`picturename`, `album_id`, `user_id`) VALUES ( '$uploadFilePath', '$picturename', '$albumId', '$user_id')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        echo "File is valid, and was successfully uploaded.\n";
                    } else {
                        echo "Possible file upload attack!\n";
                    }
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        header('Location: index.php');
    }
    ?>

    </div>
<?php
} else {
    ?>
    <div>
        Before upploading photos please
        <span><a href="login.php">Login</a> or <a href="register.php">Register</a></span>
    </div>
<?php
}
?>
<?php require_once "footer.php"?>
