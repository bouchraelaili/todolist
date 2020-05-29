<?php
session_start();
echo $id = $_SESSION['id'];
if (empty($_SESSION['id'])) {
    header("Location: $login");
}
include $user;
$find = new User;
$user = $find->select($id);
?>
<nav class="navbar navbar-expand-lg navbar  fixed-top" style="background-color:#f6eac2">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" style="" href="<?php echo $index ?>">Listes<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown"  >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $user->photo ?>" width="40px" alt=""> <?php echo $user->username ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown"  >
                <a class="dropdown-item" href="<?php echo $information ?>">Changer mes information</a>
                <a class="dropdown-item" href="<?php echo $pwd ?>">Changer le mot de passe</a>
                <a class="dropdown-item" href="<?php echo $photo ?>">Changer ma photo</a>
                <!-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo $logout ?>">Déconnecter</a>
                </div> -->
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $logout ?>">Déconnecter<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
