<?php

if ($_SESSION['logged_in'] === true) {
        header('Location: index.php?page=feed');
        exit();
    } else {
        header('Location: index.php?page=login');
        exit();
    }

?>