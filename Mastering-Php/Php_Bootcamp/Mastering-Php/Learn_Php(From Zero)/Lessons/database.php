<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connect To Database</title>
    </head>
    <body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "users";
        $connect = mysqli_connect($host, $user, $pass, $db);

        if (isset($_POST['insert'])) {
            if ($connect) { 
                $insert = "INSERT INTO infos VALUES(5, 'said', 34)";
                $query = mysqli_query($connect, $insert);
                if ($query) {
                    echo "Inserting data to database is successful";
                } else {
                    echo "Cannot insert data to database: " . mysqli_error($connect);
                }
            } else {
                echo "No connection established to insert data.";
            }
        }

        if (isset($_POST['update'])) {
            if ($connect) {
                $update = "UPDATE infos SET name='ahmed', age=25 WHERE id=3";
                $query = mysqli_query($connect, $update);
                if ($query) {
                    echo "Updating data is successful";
                } else {echo "Cannot update data, please check the query you write";}
            }
            else {
                echo "Cannot connect to database , check the query";
            }
        }

        if (isset($_POST['delete'])) {
            if ($connect) {
                $delete = "DELETE FROM infos WHERE id=4";
                $query = mysqli_query($connect, $delete);
                if ($query) {
                    echo "Delete user is success";
                } else {echo "Cannot delete the user";}
            } 
            else {echo "There is a problem with the connection";}
        }

        if (isset($_POST['select'])) {
            if ($connect) {
                $select = "SELECT name, age FROM infos";
                $res = mysqli_query($connect, $select);
            }
        }
    ?>
        <form action="" method="POST">
            <center>
                <br><br>
                <input type="submit" value="Insert" name="insert">
                <br><br>
                <input type="submit" value="Update" name="update">
                <br><br>
                <input type="submit" value="delete" name="delete">
                <br><br>
                <input type="submit" value="Select" name="select">

                <br><hr><br><br>

                <table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <td><b>name</b></td>
                            <td><b>age</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row= mysqli_fetch_array($res)) {
                                echo "<tr>";
                                    echo "<td>" .$row['name'] . "</td>";
                                    echo "<td>" .$row['age'] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </center>
        </form>
    </body>
</html>