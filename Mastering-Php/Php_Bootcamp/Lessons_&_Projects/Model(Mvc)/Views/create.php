<?php
    $title = "Ajouter Stagaire";
    // starting an ob : 
    ob_start();
?>
    <!-- html code  -->
    <form action="index.php?action=store" method="post">
        <div class="form-group">
            <label for="nom">Nom</label><br>
            <input type="text" name="nom" id="nom" class="form-control"><br>

            <label for="prenom">Prenom</label><br>
            <input type="text" name="prenom" id="prenom" class="form-control"><br>

            <label for="age">Age</label><br>
            <input type="text" name="age" id="age" placeholder="exemple :23" class="form-control"><br>

            <label for="login">Login</label><br>
            <input type="text" name="login" id="login" class="form-control"><br>

            <label for="ps">Mot De Passe</label><br>
            <input type="password" name="password" id="ps" class="form-control"><br>

            <input type="submit" value="Ajouter" name="ajouter" class="btn btn-success">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once "layout.php"; ?>
