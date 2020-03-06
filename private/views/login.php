<?php require __DIR__ . "/../templates/header.php"; ?>

<div class="backgroundvid__div">
    <video class="backgroundvid" muted loop playsinline>
        <source src='videos/backgroundvid.mp4' type="video/mp4">
        </video>
</div>
<img id="backarrow" class="backarrow" src="images/arrowleft.png" alt="arrow">
<img id="backarrow2" class="backarrow" src="images/arrowleft.png" alt="arrow">
<div id="loginpage" class="loginpage">
<img id="logo" class="logo" src="images/vifovol.png" alt="vifo logo">
<div id="loginpage-buttons" class="loginpage-buttons">
<div id="login-button" class="login-button">
    Login
</div>
<div id="register-button" class="register-button">
    Ik ben nieuw hier!
</div>
</div>
</div>
<?php
session_start();

if (isset($_SESSION['logged_in'])) {

} else {
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if (empty($username) or empty($password)) {
            $error = 'Elk veld moet ingevuld worden!';
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
                exit();
            } else {
                $error = 'Incorrect gebruikersnaam of wachtwoord!';
            }
        }
    }
}
?>

<div id="login" class="login">
<?php if (isset($error)) { ?>
    <p class="errormessage"><?php echo $error ?></p>
<?php } ?>
    <div class="login-form__box">
        <form class="login-form" id="login-form" action="index.php?page=login" method="post">

            <p class="login-form__inputs">
              <input class="name input" name="naam" type="text" class="input" id="name" placeholder="Naam"/>
            </p>
                        
            <p class="login-form__inputs">
              <input class="password input" name="password" type="password"  id="password" placeholder="Wachtwoord"/>
            </p>
     
            <div class="login-form__inputs">
              <input class="submitbutton" name="submit" type="submit" value="Login" id="submitbutton"/>
            </div>
          </form>
        </div>
</div>

<div id="register" class="register">
    <div class="register-form__box">
        <form class="register-form" id="register-form" action="" method="">
    
            <p class="register-form__inputs">
              <input class="naam input" name="registreernaam" type="text" placeholder="Naam" id="name" />
            </p>

            <p class="register-form__inputs">
                <input class="email input" name="registreeremail" type="text" placeholder="Email" id="email" />
              </p>
                        
            <p class="register-form__inputs">
              <input class="password input" id="registreerpassword" name="password" type="password" placeholder="Wachtwoord"/>
            </p>
    
            <div class="register-form__inputs">
              <input class="submitbutton" name="registreersubmit" type="submit" value="Creëer account" id="button-black"/>
            </div>
          </form>
        </div>
</div>
<script src="js/login.js"></script>

<?php require __DIR__ . "/../templates/footer.php"; ?>