<?php
    $title = "Modify User Infos";
    ob_start();
?>
    <form action="index.php?action=update" method="POST">
        <input type="hidden" name="id"  class="form-control" value="<?= $user['id']?>">

        <label for="fn">First Name</label>
        <input type="text" name="f_name" id="fn" class="form-control" value="<?= $user['f_name']?>">

        <label for="ln">Last Name</label>
        <input type="text" name="l_name" id="ln" class="form-control" value="<?= $user['l_name']?>">

        <label for="age">Age</label>
        <input type="text" name="age" id="age" class="form-control" placeholder="example : 18" value="<?= $user['age']?>">

        <label for="em">Email</label>
        <input type="email" name="email" id="em" class="form-control" value="<?= $user['email']?>">

        <label for="ps">password</label>
        <input type="password" name="password" id="ps" class="form-control"><br>

        <input type="submit" value="Update User" name="add" class="btn btn-success">

    </form>
<?php
    $content = ob_get_clean();
    require_once "Views/layout.php";
?>