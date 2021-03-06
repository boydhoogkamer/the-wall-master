<?php 

include 'dbConnect.php';

function get_posts() {
    $pdo = dbConnect();
    $query = 'SELECT post.*, users.user_name, users.user_email FROM post INNER JOIN users ON users.user_id = post.user_id ';
    $statement = $pdo->query( $query );

    return $statement;
}

function get_userposts($user_id) {
    $pdo = dbConnect();
    $query = 'SELECT post.*, users.user_name, users.user_email, users.user_img FROM post INNER JOIN users ON users.user_id = post.user_id WHERE post.user_id = :user_id ';
    $statement = $pdo->prepare( $query );
    $params = [
        'user_id' => $user_id
    ];
    $statement->execute($params);

    return $statement;
}

function get_userinfo($user_id) {
    $pdo = dbConnect();
    $query = 'SELECT * FROM users WHERE user_id = :user_id ';
    $statement = $pdo->prepare( $query );
    $params = [
        'user_id' => $user_id
    ];
    $statement->execute($params);

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

function logInCheck(){
    global $_SESSION;
    session_start();
    if(!isLoggedIn()){
        header('Location: index.php?page=login');
    }
}
function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
        return true;
    }
    return false;
}

function save_photo($image, $caption, $tags, $user_id) {
    $db = dbConnect();
    $data = [$image, $caption, $tags, $user_id];
    $sql = "INSERT INTO post (image, caption, tag, user_id) VALUES (?, ? ,?, ?)";
    $db->prepare($sql)->execute($data);
}

function change_user_img($user_image, $id) {
    $db = dbConnect();
    $data = $user_image;
    $sql = "UPDATE Customers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE id = :id";
    $data = [
        'id' => $id
    ];
    $db->prepare($sql)->execute($data);
}

function register($user_img, $user_name, $user_email, $user_password) {
    $pdo = dbConnect();
    $data = [$user_img, $user_name, $user_email, $user_password];
    $sql = "INSERT INTO users (user_img, user_name, user_email, user_password) VALUES (?, ?, ? ,?)";
    $pdo->prepare($sql)->execute($data);
    header('Location: index.php?page=login');
}

// function change_userinfo() {
//     $pdo = dbConnect();
//     $data = [$user_img, $user_name, $user_email, $user_password];
//     $sql = "INSERT INTO users (user_img, user_name, user_email, user_password) VALUES (?, ?, ? ,?)";
//     $pdo->prepare($sql)->execute($data);

//     return $statement;
// }