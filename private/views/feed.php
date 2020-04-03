 <?php require __DIR__ . "/../templates/header.php"; ?>
 <?php include __DIR__ . "/../includes/rotate.php"; ?>
 <?php include __DIR__ . "/../templates/topbar.php"; ?>
 <style>
 ::-webkit-scrollbar { 
    display: none; 
}

body, html {
    overflow-y: hidden;
    } 
</style>
<?php 

$post_array = [];

foreach ($posts as $post):
    array_push($post_array, $post);
    $post_image = $post['image'];
    $post_username = $post['user_name'];
    $post_caption = $post['caption'];
    $post_userimg = $post['user_img'];
 endforeach;

?>

<div id="images-div" class="images-div">
<img id="feed-image" class="feed-image" src="images/<?php echo $post_image ?>">
</div>

<div id="menu" class="menu">
<div class="menu-left">
<img class="profile-icon" src="images/<?php echo $post_userimg ?>" alt="Profile Image">
</div>
<div class="menu-middle">
<h2 class="menu-middle-title"><?php echo $post_username ?></h2>
<p class="menu-middle-caption"><?php echo $post_caption ?></p>
</div>
<div class="menu-right">
    <img class="icon-like" src="images/thumbsup.svg" alt="Thumbs Up!">
    <img class="icon-reaction" src="images/reaction.svg" alt="React!">
    <img class="icon-share" src="images/share.svg" alt="Share!">
</div>
</div>
<script src="js/feed.js"></script>
<?php require __DIR__ . "/../templates/footer.php"; ?>