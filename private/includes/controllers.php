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

function upload() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/upload.php';

    include $view;
}

function login() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/login.php';

    include $view;
}

// function about() {
//     include "about.php";
// }

// function contact() {
//     include "contact.php";
// }