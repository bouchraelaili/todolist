<?php
// css
$bootstrap = "../assets/css/bootstrap.css";
$style = "../assets/css/style.css";
$fa = "../assets/css/all.css";
// js
$jQuery = "../assets/js/jQuery.js";
$bundle = "../assets/js/bootstrap.bundle.js";
$jQueryMe = "../assets/js/jQueryMe.js";
// links
$index = "../index.php";
$profile = "profile.php";
$information = "user_edit.php";
$photo = "photo_edit.php";
$pwd = "password_edit.php";
$logout = ".../treatment/logout.php";
$user = "../classes/user.php";
$login = "../login.php";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "Profile";
?>

<?php include_once '../include/header.php';?>
<?php include '../include/navbar.php';?>


<div class="container-fluid content">
    <div class="edit row">
        <div class="col-8 row justify-content-center" style="margin-left:20%;">
            <div class="info col-10 align-self-center">
                <div class="card">
                    <h5 class="card-header" style="color:#3a041fdc;border-color:#3a041fdc">Modifier mes information</h5>
                    <div class="card-body">
                        <form action="../treatment/user_update.php" method="post">
                            <div class="form-group list-group list-group-flush">
                            <li class="list-group-item">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control" value="<?php echo $user->username ?>" id="username" name="username">
</li>
                            </div>
                            <div class="form-group list-group list-group-flush">
                            <li class="list-group-item">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="<?php echo $user->email ?>" id="email" name="email">
                            </div>
</li>
                            <div class="form-group list-group list-group-flush">
                            <li class="list-group-item">
                                <label for="firstname">Nom</label>
                                <input type="text" class="form-control" value="<?php echo $user->firstname ?>" id="firstname" name="firstname">
                            </div>
                            </li>
                            <div class="form-group list-group list-group-flush">
                            <li class="list-group-item">
                                <label for="lastname">Prénom</label>
                                <input type="text" class="form-control" value="<?php echo $user->lastname ?>" id="lastname" name="lastname">
                            </div>
                            </li>
                            <center>
                            <button type="submit" class="btn btn" style="background-color:#74596c;color:white;margin-top:4%">Modifier</button>

                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once '../include/footer.php';?>
