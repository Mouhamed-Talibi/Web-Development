<?php
    $title = "Valider La supprission";
    ob_start();
?>
    <p>Vouler Vous Vraiment Valider La Suppression ?</p>
    <a href="index.php?action=destroy&id=<?= $id?>" class="btn btn-danger">Oui , Valider La supprission</a>
    <a href="index.php?action=list" class="btn btn-success">Non, Anuller La Suppression</a>
<?php
    $content = ob_get_clean();
    include "layout.php";
?>