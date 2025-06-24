<?php
    $title = "Users List";
    ob_start();
?>
    <a href="index.php?action=add" class="btn btn-primary">Add New User</a><br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($users)){?>
                <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['f_name']?></td>
                    <td><?= $row['l_name']?></td>
                    <td><?= $row['age']?></td>
                    <td><?= $row['email']?></td>
                    <td>
                        <a href="index.php?action=modify&id=<?= $row['id']?>" class="btn btn-primary">Modify</a>
                        <a href="index.php?action=delete&id=<?= $row['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this user ?')">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    $content = ob_get_clean();
    require "Views/layout.php";
?>
