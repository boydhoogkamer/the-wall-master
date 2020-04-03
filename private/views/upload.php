<?php
  require __DIR__ . "/../templates/header.php";
  require __DIR__ . "/../templates/topbar.php";
?>


<form class="upload__form" method="post" action="index.php?page=upload" enctype="multipart/form-data">
<div class="uploadImage-div">
<input id="uploadImage" style="display: none;"  type="file" name="image" onchange="PreviewImage();" required>
<label class="upload__label" style="cursor: pointer;" for="uploadImage">Selecteer <br>uw<br> foto</label>
</div>

<div class="uploaded__img-div">
<img class="uploaded__img" id="uploadPreview">
</div>  

<div class="upload__inputs-div">
<div class="upload__inputs">
        <h1 class="upload__text">Catogorie</h1>
        <input class="upload__input" type="text" name="tag" placeholder="Voeg een Catogorie toe..." required>

        <h1 class="upload__text">Beschijving</h1>
        <textarea rows="3" class="upload__input" type="text" name="caption" placeholder="Voeg Beschijving toe..." required></textarea>

        <input class="upload__submit" type="submit" name="upload" value="Plaats foto!">
      </div>
</div>
</form>



<script src="js/upload.js"></script>

<?php require __DIR__ . "/../templates/footer.php"; ?>