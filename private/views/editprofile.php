<?php require __DIR__ . "/../templates/header.php"; ?>
<?php require __DIR__ . "/../templates/topbar.php"; ?>

<div class="editprofile__background">



<div class="editprofile__div">

<div class="edit-top">
<form class="edit-profile__form" action="index.php?page=editprofile.php" method="post" enctype="multipart/form-data">

<div class="edit-uploaded__img-div">
<img class="edit-uploaded__img" id="uploadPreview">
</div>  


<input id="uploadImage" style="display: none;"  type="file" name="image" onchange="PreviewImage();" required>
<label class="edit-upload__label" style="cursor: pointer;" for="uploadImage">Selecteer uw foto</label>

<div class="edit-form__inputs">
              <input class="edit-submitbutton" name="editsubmit-image" type="submit" value="Bewerk" id="button-black"/>
</div>
</form>

</div>
<!-- <div class="edit-bottom">

<form class="edit-profile__form" action="index.php?page=editprofile.php" method="post">
    <p class="edit-form__inputs">
              <input class="naam input" name="editname" type="text" placeholder="Naam" id="name" />
            </p>
            <div class="edit-form__inputs">
              <input class="submitbutton" name="editsubmit-name" type="submit" value="Bewerk" id="button-black"/>
            </div>
</form>

<form class="edit-profile__form" action="index.php?page=editprofile.php" method="post">
            <p class="edit-form__inputs">
                <input class="email input" name="editemail" type="text" placeholder="Email" id="email" />
              </p>
              <div class="edit-form__inputs">
              <input class="submitbutton" name="editsubmit-email" type="submit" value="Bewerk" id="button-black"/>
            </div>
</form>

<form class="edit-profile__form" action="index.php?page=editprofile.php" method="post">
            <p class="edit-form__inputs">
              <input class="password input" id="editpassword" name="editpassword" type="password" placeholder="Wachtwoord"/>
            </p>
            <div class="edit-form__inputs">
              <input class="submitbutton" name="editsubmit-password" type="submit" value="Bewerk" id="button-black"/>
            </div>
</form> -->













</div>
</div>
</div>
<script src="js/upload.js"></script>
<?php require __DIR__ . "/../templates/footer.php"; ?>