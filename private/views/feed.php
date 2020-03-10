 <?php require __DIR__ . "/../templates/header.php"; ?>
 <?php foreach ($posts as $post):?>
<div id="images-div" class="images-div">
<img id="feed-image" class="feed-image" src="images/<?php echo $post['image'] ?>">
</div>

<div id="topicons" class="topicons">
<div class="vifo-icon-text">
<img id="icon-vifo" class="icon-vifo" src="images/IF.svg" alt="ViFo Icon">
<div id="vifo-textcloud" class="vifo-textcloud">Loren ipsum Loren ipsum Loren ipsum Loren ipsum Loren ipsum</div>
</div>
<div id="icon-burger" class="icon-burger">
<div class="line1 line"></div>
<div class="line2 line"></div>
<div class="line3 line"></div>
</div>
</div>


<div id="nav" class="nav">
    <img id="icon-cross" class="icon-cross" src="images/cross.png" alt="Cross Icon">
    <div class="menu-items">
        <div class="menu-item">
            <img class="menu-item-icon" src="images/person.png" alt="Person Icon">
            <h2 class="menu-item-h2">Profiel</h2>
        </div>
        <div class="menu-item">
            <img class="menu-item-icon" src="images/glass.png" alt="Glass Icon">
            <h2 class="menu-item-h2">Zoeken</h2>
        </div>
        <div class="menu-item">
            <img class="menu-item-icon" src="images/plus.png" alt="Plus Icon">
            <h2 class="menu-item-h2">Uploaden</h2>
        </div>
    </div>
</div>

<div id="menu" class="menu">
<div class="menu-left">
<img class="profile-icon" src="images/<?php echo $post['userimg'] ?>" alt="Profile Image">
</div>
<div class="menu-middle">
<h2 class="menu-middle-title"><?php echo $post['username'] ?></h2>
<p class="menu-middle-caption"><?php echo $post['caption'] ?></p>
</div>
<div class="menu-right">
    <img class="icon-like" src="images/thumbsup.svg" alt="Thumbs Up!">
    <img class="icon-reaction" src="images/reaction.svg" alt="React!">
    <img class="icon-share" src="images/share.svg" alt="Share!">
</div>
</div>
<?php endforeach;?>
<script src="js/feed.js"></script>
<?php require __DIR__ . "/../templates/footer.php"; ?>

