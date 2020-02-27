<?php 

include 'dbConnect.php';

function get_posts() {
    $pdo = dbConnect();
    $query = 'SELECT * FROM `post`';
    $statement = $pdo->query( $query );

    return $statement;
}