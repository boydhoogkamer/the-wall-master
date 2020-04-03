<?php 

function feed() {

    global $CONFIG;

    logInCheck();

    $view = $CONFIG['view_path'] . '/feed.php';
    $posts = get_userposts($_SESSION['user_id']);
    
    include $view;
}

function info() {

    global $CONFIG;

    logInCheck();

    $view = $CONFIG['view_path'] . '/info.php';

    include $view;
}


function profile() {

    global $CONFIG;

    logInCheck();

    $view = $CONFIG['view_path'] . '/profile.php';
    $posts = get_userposts($_SESSION['user_id']);
    $userinfo = get_userinfo($_SESSION['user_id']);
    
    include $view;
}

function editProfile() {

    global $CONFIG;

    logInCheck();

    // if (isset($_POST['editsubmit-image'])) {
    //     $filename = basename($_FILES['image']['name']);
    //     $target = __DIR__ ."/../../images/".$filename;
    //     $user_image = $_FILES['image']['name'];
    //     $user_id = $_SESSION['user_id'];
    //           if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    //             save_photo($filename);
    //             header("Location: index.php?page=profile");
    //           } else {
    //               echo "something went wrong";
    //           }
    //   }

      $view = $CONFIG['view_path'] . '/editprofile.php';
    
    include $view;

}

function upload() {

    global $CONFIG;

    logInCheck();

    if (isset($_POST['upload'])) {
        $filename = basename($_FILES['image']['name']);
        $target = __DIR__ ."/../../images/".$filename;
        $image = $_FILES['image']['name'];
        $caption = $_POST['caption'];
        $tags  = $_POST[ 'tag'];
        $user_id = $_SESSION['user_id'];
              if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                save_photo($filename, $caption, $tags, $user_id);
                header("Location: index.php?page=feed");
              } else {
                  echo "something went wrong";
              }
      }

    $view = $CONFIG['view_path'] . '/upload.php';

    include $view;
}

function login() {

    global $CONFIG;

    session_start();
    session_destroy();

    $view = $CONFIG['view_path'] . '/login.php';

    include $view;
}

function checkpassword() {
    session_start();
    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $sql = 'SELECT * FROM users WHERE user_name = :user_name';

        $statement = dbConnect()->prepare($sql);

        $params = [
            'user_name' => $user_name
        ];

        $result = $statement->execute($params);

    } else {
        $error = 'Inloggen mislukt';
        header('Location: index.php?page=login');
        exit;
    }

    if($statement->rowCount() === 1){
        $user = $statement->fetch();

        if(password_verify($password, $user['user_password'])){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['user_name'];
            header('Location: index.php?page=feed');
        }

    } else {    
        $errors['wachtwoord'] = 'Verkeerde wachtwoord ingevoerd!';
        header('Location: index.php?page=login');
    }
}


function createaccount() {
    if (isset($_POST['registreersubmit'])) {
        $user_img = '958771235726153210351275612502165122103612456721350213521350521.jpg';
        $user_name = $_POST['registreernaam'];
        $user_email = $_POST['registreeremail'];
        $user_password  = password_hash($_POST['registreerpassword'], PASSWORD_DEFAULT);
        register($user_img, $user_name, $user_email, $user_password);
      }

    if (empty($user_name) or empty($user_email) or ($user_password)) {
    $error = 'Elk veld moet ingevuld worden!';
    }
}

function toUpload() {
    $test = 'Home';
}