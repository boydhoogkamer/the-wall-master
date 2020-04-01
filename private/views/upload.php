<?php
  require __DIR__ . "/../templates/header.php";
  require __DIR__ . "/../templates/topbar.php";
?>

<div class="upload__select">  
<input  id="uploadImage"  style="display:none;"  type="file" name="myPhoto" onchange="PreviewImage();" />
<label for="uploadImage">Select file</label>
</div>

<div class="upload__img">  
<img class="uploaded__img" id="uploadPreview" />
</div>

<script src="js/upload.js"></script>
<script src="js/feed.js"></script>
<?php require __DIR__ . "/../templates/footer.php"; ?>