<?php 

include 'dbConnect.php';

function get_posts() {
    $pdo = dbConnect();
    $query = 'SELECT * FROM `post`';
    $statement = $pdo->query( $query );

    return $statement;
}

function get_post($id) {
    $pdo = dbConnect();
    $query = 'SELECT * FROM `post` WHERE id = :id';
    $data = [
        'id' => $id
    ];
    $statement = $pdo->prepare( $query )->execute();

    return $statement;
}

function save_photo($image, $caption, $tags) {
    $db = dbConnect();
    $data = [$image, $caption, $tags];
    $sql = "INSERT INTO post (image, caption, tag) VALUES (?, ? ,?)";
    $db->prepare($sql)->execute($data);
}

function register($user_name, $user_email, $user_password) {
    $pdo = dbConnect();
    $data = [$user_name, $user_email, $user_password];
    $sql = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ? ,?)";
    $pdo->prepare($sql)->execute($data);
    header('Location: index.php?page=login');
}
