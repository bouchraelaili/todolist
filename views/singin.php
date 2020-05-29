<?php
// css
$bootstrap = "../assets/css/bootstrap.css";
$style = "../assets/css/style.css";
$fa = "../assets/css/all.css";
// js
$jQuery = "../assets/js/jQuery.js";
$bundle = "../assets/js/bootstrap.bundle.js";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "sing in";
?>

<?php include_once '../include/header.php';?>

<div class="container-fluid login">
    <div class="login-image"></div>
    <div class="login-info2"> 
         <H2>Créer Votre Compte</H2>
        <form action="../treatment/user_store.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
              
                <label for="firstname" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="firstname" name="firstname"placeholder="Taper votre nom" style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="lastname" class="col-sm-4 col-form-label">Prénom</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Taper votre prenom" style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Nom d'utilisateur</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Nom d'utilisateur" style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Taper votre E-mail" style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-4 col-form-label">Photo</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" id="image" name="image" style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="mot" class="col-sm-4 col-form-label">Mot de passe</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="mot" name="mot"  placeholder="Taper votre mot de passe"style="background-color:#efe6cc">
                </div>
            </div>
            <div class="form-group row">
                <label for="conf" class="col-sm-4 col-form-label">Confirmation du mot de passe</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="conf" name="conf" placeholder="Taper votre mot de passe" style="background-color:#efe6cc">
                </div>
            </div>
            <button type="submit" id="connect" name="connect" class="btn btn-submit" disabled>créer votre compte</button>
        </form>
    </div>
</div>

<?php include_once '../include/footer.php';?>
<script>
    $("#conf").blur(function () {
    var PasswordVal=$('#mot').val();
    var ConfirmPasswordVal=$('#conf').val();
    if(PasswordVal != ConfirmPasswordVal && ConfirmPasswordVal.length > 0 && PasswordVal.length > 0)
    //   $('.show2').show();
      $('.btn').prop("disabled", true);
    else
    //   $('.show2').hide();
      $('.btn').prop("disabled", false);
  });
</script>