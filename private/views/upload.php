<?php
  // Initialize message variable
  $msg = "";

  if (isset($_POST['upload'])) {
    $filename = basename($_FILES['image']['name']);
    $target = __DIR__ ."/../../images/".$filename;
    $image = $_FILES['image']['name'];
    $caption = $_POST['caption'];
    $tags  = $_POST[ 'tag'];
          if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            save_photo($filename, $caption, $tags);
            header("Location: index.php?page=upload");
          } else {
              echo "something went wrong";
          }
  }
?>

<form method="post" action="index.php?page=upload" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div class="fileButton">
          <input type="file" name="image" required>
        </div>
        <p class="post-caption"><label>Add caption:</label></p>
        <div class="addTitle">
          <input type="text" name="caption" placeholder="Caption" required>
        </div>
        <p class="tagTxt"><label>Add tags:</label></p>
        <div class="addTag">
          <input type="text" name="tag" placeholder="Type here your tags..." required>
        </div>
        <div class="uploadButton">
          <input type="submit" name="upload" value="Upload Image">
        </div>
      </form>