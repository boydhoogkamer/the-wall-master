<?php require __DIR__ . "/../templates/header.php"; ?>
<?php require __DIR__ . "/../templates/topbar.php"; ?>


<div class="achtergrond">

<div class="profielprofiel">
<?php foreach ($userinfo as $user): ?>
    <img class="profielprofielfoto" src="images/<?php echo $user['user_img'] ?>">
    <h1 class="profieltiteltext"><?php echo $user['user_name'] ?></h1><br>
    <h4 class="profielsidetext"><?php echo $user['user_email'] ?></h4>
    <?php endforeach; ?>

</div>

<div class="profielfotos">
<?php foreach ($posts as $post): ?>
    <div class="profielfoto__modaal">
    <div class="profielfoto__hover">
    <h2 class="profielfoto__caption"><?php echo $post['caption'] ?></h2>
    <br>
    <h2 class="profielfoto__tag">Categorie: <?php echo $post['tag'] ?></h2>
    </div>
    <img class="profielfoto" src="images/<?php echo $post['image'] ?>">
    </div>
<?php endforeach; ?>
</div>
</div>

<script src="js/profile.js"></script>
<?php require __DIR__ . "/../templates/footer.php"; ?>