<?php

    $title = "List Des Voitures";
    ob_start();
?>
    <a href="index.php?action=create" class="btn btn-success">Ajouter une voiture</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Model</th>
                <th>Prix</th>
                <th>Action</th>
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($voitures as $voiture):
            ?>
                <tr>
                    <td><?= $voiture['id']?></td>
                    <td><?= $voiture['model']?></td>
                    <td><?= $voiture['prix']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $voiture['id']?>" class="btn btn-primary">Editer la voiture</a>
                        <a href="index.php?action=delete&id=<?= $voiture['id']?>" class="btn btn-danger" onclick="return confirm('Voulez vous supprimer cette voiture?')">Supprimer la voiture</a>
                    </td>
                </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>

<?php
    $content = ob_get_clean();
    include_once "layout.php";
?>