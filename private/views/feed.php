 <?php require __DIR__ . "/../templates/header.php"; ?>


<?php foreach ($posts as $post):?>
<h2><?php echo $post['username'] ?></h2>
<?php endforeach;?>

<?php require __DIR__ . "/../templates/footer.php"; ?>