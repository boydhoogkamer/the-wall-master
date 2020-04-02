<?php
    $box_left = 'Profile';
    $box_middle = 'Search';
    $box_right = 'Upload';
?>

<div id="nav" class="nav">
    <img id="icon-cross" class="icon-cross" src="images/cross.png" alt="Cross Icon">
    <div class="menu-items">
    <a href="index.php?page=profile"><div class="menu-item">
            <img class="menu-item-icon" src="images/person.png" alt="Person Icon">
            <h2 class="menu-item-h2"><?php echo $box_left; ?></h2>
        </div>
        </a>
        <div class="menu-item">
            <img class="menu-item-icon" src="images/glass.png" alt="Glass Icon">
            <h2 class="menu-item-h2"><?php echo $box_middle; ?></h2>
        </div>
        <a href="index.php?page=upload"><div class="menu-item">
            <img class="menu-item-icon" src="images/plus.png" alt="Plus Icon">
            <h2 class="menu-item-h2"><?php echo $box_right; ?></h2>
        </div>
        </a>
    </div>
</div>

<div id="topicons" class="topicons">
<div class="vifo-icon-text">
<img id="icon-vifo" class="icon-vifo" src="images/IF.svg" alt="ViFo Icon">
<div id="vifo-textcloud" class="vifo-textcloud">Dubbel klik om het menu te gebruiken!</div>
</div>
<div id="icon-burger" class="icon-burger">
<div class="line1 line"></div>
<div class="line2 line"></div>
<div class="line3 line"></div>
</div>
</div>

<script src="js/topbar.js"></script>