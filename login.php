<?php
// css
$bootstrap = "assets/css/bootstrap.css";
$style = "assets/css/style.css";
$fa = "assets/css/all.css";
// js
$jQuery = "assets/js/jQuery.js";
$bundle = "assets/js/bootstrap.bundle.js";
// logo
$img = "assets/Logo_login.png";
// title
$title = "Log in";
?>

<?php include_once 'include/header.php';?>

<div class="container-fluid login">
    <div class="login-image"></div>
    <div class="login-info">
        <form action="treatment/user_fetch.php" method="POST">
        <h1>Login</h1>
        <img src="1200px-Crystal_Clear_kdm_user_female.svg.png" alt="" width="20%">
            <div class="form-group" >
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="E-mail" style="background-color:#efe6cc;outline:none">
                </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password"  id="password" placeholder="Mot De Passe" style="background-color:#efe6cc;outline:none">
            </div>
            <button type="submit" id="connect" name="connect" class="btn btn-submit">Se Connecter</button><br>
            <a href="views/singin.php" class="btn btn-submit">Créer un compte</a>
        </form>
    </div>
</div>

<?php include_once 'include/footer.php';?>
