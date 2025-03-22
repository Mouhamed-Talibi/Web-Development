<?php
    $title = "Add New User";
    ob_start();
?>
    <form action="index.php?action=insert" method="POST">
        <label for="fn">First Name</label>
        <input type="text" name="f_name" id="fn" class="form-control">

        <label for="ln">Last Name</label>
        <input type="text" name="l_name" id="ln" class="form-control">

        <label for="age">Age</label>
        <input type="text" name="age" id="age" class="form-control" placeholder="example : 18">

        <label for="em">Email</label>
        <input type="email" name="email" id="em" class="form-control">

        <label for="ps">password</label>
        <input type="password" name="password" id="ps" class="form-control"><br>

        <input type="submit" value="Add User" name="add" class="btn btn-success">

    </form>
<?php
    $content = ob_get_clean();
    require_once "Views/layout.php";
?>