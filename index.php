<?php
// css
$bootstrap = "assets/css/bootstrap.css";
$style = "assets/css/style.css";
$fa = "assets/css/all.css";
// js
$jQuery = "assets/js/jQuery.js";
$bundle = "assets/js/bootstrap.bundle.js";
$jQueryMe = "assets/js/jQueryMe.js";
// links
$index = "index.php";
$profile = "views/profile.php";
$information = "views/user_edit.php";
$photo = "views/photo_edit.php";
$pwd = "views/password_edit.php";
$logout = "treatment/logout.php";
$user = "classes/user.php";
$login = "login.php";
// logo
$img = "../assets/Logo_login.png";
// title
$title = "Accueil";
?>

<?php include_once 'include/header.php';?>
<?php include 'include/navbar.php';?>

<div class="container-fluid content"><center><h1 style="color:#D5BE78">Liste des taches</h1></center>
    <div class="index row">
   <div class="col-8 row justify-content-center" style="margin-left:10%;margin-top:3%;margin-bottom:6%" >
            <div class="create-todolist col-12 align-self-center">
                <div class="card text-dark  mb-2" style="background-color:#f5e9c1">
                    <div class="card-header">
                        Ajouter une Tache : 
                    </div>
                    <div class="card-body">
                        <form action="treatment/todolist_store.php" method="post">
                            <div class="form-group row">
                                <p class="col-sm-2 col-form-label">Tache :</p>
                                <input type="text" class="form-control col-sm-8" name="name">
                            </div>
                            <div class="form-group row">
                                <p class="col-sm-3 col-form-label">Couleur Du Tache :</p>
                                <div id="color-picker" class="color-picker col-sm-12" ></div>
                                <input type="text" hidden name="color" id="color">
                            </div>

                        <center> <button type="submit" class="btn btn mb-4" name="submit" style="background-color:#74596c; color:white">Ajouter</button></center>   
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php

require_once 'classes/task.php';
require_once 'classes/todolist.php';
$all = new Todolist;
$data = $all->select($id);
foreach ($data as $datum) {
    ?>
        <div class="todolist col-lg-8 col-md-7 col-sm-6 col-xs-9" >
            <div class="card text-dark mb-2" style="position:relative;margin-left:15%;margin-top:2%;background-color:<?php echo $datum->color ?>">
                <div class="card-header">
                    <?php echo $datum->name ?>
                    <button data-toggle="modal" data-target="#name<?php echo $datum->id ?>" class="edit-todolist-btn"><i class="fas fa-edit"></i></button>
                    <div class="modal fade" id="name<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier le nom du ToDoList</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="treatment/todolist_update.php" method="post">
                                    <div class="modal-body" >
                                        <div class="form-group">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                            <label for="name">Nom</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $datum->name ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-outline-info">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button data-toggle="modal" data-target="#color<?php echo $datum->id ?>" class="color-todolist-btn"><i class="fas fa-brush"></i></button>
                    <div class="modal fade" id="color<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Changer le couleur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="treatment/todolist_color.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <p class="col-sm-4 col-form-label">Choisir un couleur</p>
                                            <div id="color-picker2" class="color-picker2 col-sm-8"></div>
                                            <input type="text" hidden name="color2" id="color2">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-outline-info">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><button data-toggle="modal" data-target="#task<?php echo $datum->id ?>" class="create-task-btn"><i class="fas fa-plus"></i></button>
                    <div class="modal fade" id="task<?php echo $datum->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un Task</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="treatment/task_store.php" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="taskText">Ecrire le task</label>
                                            <input type="text" class="form-control" id="taskText" name="taskText">
                                            <input type="text" hidden id="id" name="id" value="<?php echo $datum->id ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-outline-info">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="treatment/todolist_delete.php?id=<?php echo $datum->id ?>" class="delete-todolist-btn"><i class="fas fa-trash"></i></a>
                </div>
                <div class="card-body">
                <?php
$task = new Task;
    $tasks = $task->select($datum->id);
    foreach ($tasks as $task) {
        $checked = "";
        if ($task->done == 1) {
            $checked = "checked";
        }
        ?>
                    <div class="task">
                        <!-- <form action="treatment/task_statue.php" method="post"> -->

                        <input type="checkbox" id="check<?php echo $task->id ?>" name="check"  <?php echo $checked ?> onClick="Javascript:window.location.href = 'treatment/task_statue.php?id=<?php echo $task->id ?>&statue=<?php echo $task->done ?>';">
                            <label for="check<?php echo $task->id ?>" class="taskLabel"><?php echo $task->taskText ?></label>
                        <!-- </form> -->
                        <button data-toggle="modal" data-target="#task<?php echo $task->id ?>" class="edit-task-btn" ><i class="fas fa-edit"></i></button>
                        <div class="modal fade" id="task<?php echo $task->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modifier le task</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="treatment/task_update.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" hidden id="id" name="id" value="<?php echo $task->id ?>">
                                                <label for="taskText">Task text</label>
                                                <input type="text" class="form-control" id="taskText" name="taskText" value="<?php echo $task->taskText ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-outline-info">Modifier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a style="margin-left:60%"  href="treatment/task_delete.php?id=<?php echo $task->id ?>"><i class="fas fa-trash-alt" ></i></a>
                    </div>
            <?php
}
    ?>
                </div>
            </div>
        </div>
        <?php
}
?>
    </div>
</div>

<?php include_once 'include/footer.php';?>
