<?php 

// function home() {
//     include "home.php";
// }

function feed() {

    global $CONFIG;

    $view = $CONFIG['view_path'] . '/feed.php';
    $posts = get_posts();

    include $view;

    // if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    //     header('Location: index.php?page=feed');
    //     exit();
    // } 
    // else {
    //     header('Location: index.php?page=login');
    //     exit();
    // }
}

function upload() {

    global $CONFIG;

    // if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    //     header('Location: index.php?page=feed');
    //     exit();
    // } else {
    //     header('Location: index.php?page=login');
    //     exit();
    // }

    if (isset($_POST['upload'])) {
        $filename = basename($_FILES['image']['name']);
        $target = __DIR__ ."/../../images/uploaded-images".$filename;
        $image = $_FILES['image']['name'];
        $caption = $_POST['caption'];
        $tags  = $_POST[ 'tag'];
              if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                save_photo($filename, $caption, $tags);
                header("Location: index.php?page=upload");
              } else {
                  echo "something went wrong";
              }
      }

    $view = $CONFIG['view_path'] . '/upload.php';

    include $view;
}

function login() {

    global $CONFIG;

    // if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    //     header('Location: index.php?page=feed');
    //     exit();
    // } 
    // else {
    //     header('Location: index.php?page=login');
    //     exit();
    // }

    $view = $CONFIG['view_path'] . '/login.php';

    include $view;
}

function checkpassword() {

session_start();
    if (isset($_POST['username'] , $_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    if (empty($username) or empty($password)) {
            $error = 'Elk veld moet ingevuld worden!';
            header('Location: index.php?page=login'); 
        } else {
            $pdo = dbConnect();
            $query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND user_password = ?");
            $query->bindValue(1, $username);
            $query->bindValue(2, $password);

            $query->execute();

            $num = $query->rowCount();
            if ($num == 1) {
                $_SESSION['logged_in'] = true;
                header('Location: index.php?page=feed');
            } else {
            $_SESSION['logged_in'] = false;
            $error = 'Incorrect gebruikersnaam of wachtwoord!';
            header('Location: index.php?page=login');
            }   
        }
    }
}


function createaccount() {
    if (isset($_POST['registreersubmit'])) {
        $user_name = $_POST['registreernaam'];
        $user_email = $_POST['registreeremail'];
        $user_password  = md5($_POST['registreerpassword']);
        register($user_name, $user_email, $user_password);
      }

    if (empty($user_name) or empty($user_email) or ($user_password)) {
    $error = 'Elk veld moet ingevuld worden!';
    }
}

// function contact() {
//     include "contact.php";
// }