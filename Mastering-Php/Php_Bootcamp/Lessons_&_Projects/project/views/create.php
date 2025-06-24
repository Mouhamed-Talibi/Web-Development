<?php
    $title = "Ajouter Une Voiture";
    ob_start();
?>
    <form action="index.php?action=store" method="post">
        <div class="container">
            <label for="">Model</label><br>
            <input type="text" name="model" id="" class="form-control"><br>
            <label for="">Prix</label><br>
            <input type="text" name="prix" id="" class="form-control" placeholder="exemple: (12544.56)"><br>

            <input type="submit" value="Ajouter" class="btn btn-success" name="ajouter">
        </div>
    </form>
<?php
    $content = ob_get_clean();
    include "layout.php";
?>