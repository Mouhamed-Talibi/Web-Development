<?php

    $title = "List Des Stagaires";
    // starting an ob : 
    ob_start();
?>
<a href="index.php?action=create" class="btn btn-primary">AJouter Stagaire</a>
<table class="table table-striped">
    <thead> 
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>Login</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_assoc($stagaires)){
        ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['nom']?></td>
                <td><?= $row['prenom']?></td>
                <td><?= $row['age']?></td>
                <td><?= $row['login']?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="index.php?action=delete&id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
        <?php
            };
        ?>
    </tbody>
    </tbody>
</table>
<?php $content = ob_get_clean(); ?>
<?php include_once "layout.php"; ?>
