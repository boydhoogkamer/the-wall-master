 <?php require __DIR__ . "/../templates/header.php"; ?>


<?php foreach ($posts as $post):?>
<h2><?php echo $post['username'] ?></h2>
<h2><?php echo $post['userimg'] ?></h2>
<h2><?php echo $post['image'] ?></h2>
<h2><?php echo $post['likes'] ?></h2>
<?php endforeach;?>


<?php require __DIR__ . "/../templates/footer.php"; ?>