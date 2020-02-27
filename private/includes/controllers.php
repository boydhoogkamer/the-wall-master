<?php 

// function home() {
//     include "home.php";
// }

function feed() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/feed.php';
    $posts = get_posts();

    include $view;
}

// function about() {
//     include "about.php";
// }

// function contact() {
//     include "contact.php";
// }