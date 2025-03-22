<?php
    $title = "Edit La Voiture";
    ob_start();
?>
    <form action="index.php?action=update" method="post">
        <div class="container">
            <input type="hidden" name="id" value="<?= $carData['id']?>">
            <label for="">Model</label><br>
            <input type="text" name="model" id="" class="form-control" value="<?= $carData['model']?>">
            <label for="">Prix</label><br>
            <input type="text" name="prix" id="" class="form-control" value="<?= $carData['prix']?>"><br>

            <input type="submit" value="Edit" class="btn btn-success" name="edit">
        </div>
    </form>
<?php
    $content = ob_get_clean();
    include "layout.php";
?>