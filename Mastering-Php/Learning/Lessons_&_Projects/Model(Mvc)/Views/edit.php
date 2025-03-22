<?php

$title = "Modifier Stagaire";
// starting an ob : 
ob_start();
?>
<!-- html code  -->
<form action="index.php?action=update" method="post">
    <div class="form-group">
        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $stagaire['id'];?>">

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $stagaire['nom'];?>">

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $stagaire['prenom'];?>">

        <label for="age">Age</label>
        <input type="text" name="age" id="age" placeholder="exemple :23" class="form-control" value="<?php echo $stagaire['age'];?>">

        <label for="login">Login</label>
        <input type="text" name="login" id="login" class="form-control" value="<?php echo $stagaire['login'];?>">

        <label for="ps">Mot De Passe</label>
        <input type="password" name="password" id="ps" class="form-control" value="<?php echo $stagaire['password'];?>">

        <input type="submit" value="Modifier" name="update" class="btn btn-primary">
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php include_once "layout.php"; ?>
