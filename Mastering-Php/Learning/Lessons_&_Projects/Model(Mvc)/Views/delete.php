<?php
    $title = "Supprimer stagaire";
    ob_start();
?>
    <p>Voulez Vous Vraiment Supprimer Le Stagaire ?</p>
        <a href="index.php?action=destroy&id=<?php echo $id; ?>" class="btn btn-danger btn-sm">Valider La Suppression</a>
        <a href="index.php?action=list" class="btn btn-warning btn-sm">Anuller La Suppression</a>
<?php
    $content = ob_get_clean();
    include_once "Views/layout.php";
?>