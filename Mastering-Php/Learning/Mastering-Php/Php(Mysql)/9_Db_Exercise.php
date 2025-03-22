<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Base Exercise</title>
        <style>
            table th{
                padding: 5px;   
                
            }
        </style>
    </head>

    <body>
        <?php
            if (isset($_POST['insert'])) {
                $connect = mysqli_connect("localhost", "root", "", "my_db");
                if ($connect) {
                    // setting the variables: 
                    $id = $_POST['id'];
                    $first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
                    $last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
                    $age = $_POST['age'];
                    $email = mysqli_real_escape_string($connect, $_POST['email']);
                    $department = mysqli_real_escape_string($connect, $_POST['department']);

                    // setting, preparing an binding the statement: 
                    $stmt = mysqli_prepare($connect, "INSERT INTO users(id, first_name, last_name, age, email, department)
                    VALUES(?, ?, ?, ?, ?, ?);");
                    mysqli_stmt_bind_param($stmt, "ississ", $id, $first_name, $last_name, $age, $email, $department);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "Records Are Inserted Successfully";
                    } 
                    else {
                        die("There is a problem with inserting data: " . mysqli_error($connect));
                    }
                } 
                else { 
                    die("Connection Failed: " . mysqli_connect_error()); 
                }
            }
        ?>

        <form action="" method="post">
            <div class="container">
                <label for="">identifier</label>
                <input type="text" name="id"><br><br>

                <label for="">first name</label>
                <input type="text" name="first_name"><br><br>
                
                <label for="">last name</label>
                <input type="text" name="last_name"><br><br>

                <label for="">age</label>
                <input type="text" name="age"><br><br>
                
                <label for="">email</label>
                <input type="email" name="email"><br><br>

                <label for="">department</label>
                <input type="text" name="department"><br><br>
                <!-- button for inserting the data -->
                <button type="submit" name="insert">Insert data</button>
            </div>

            <br><hr><br>
            <center><h1>Here is the data you insert</h1></center>
            <table border="1" padding="5px" cellpadding="1px">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>AGE</th>
                        <th>EMAIL</th>
                        <th>DEPARTMENT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // coonnect to database : 
                        $connect = mysqli_connect("localhost", "root", "", "my_db");
                        if (!$connect) { die("Connection Failed: " . mysqli_connect_error()); }
                        // sql statement: 
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($connect, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo <<<HTMLCODE
                                <tr>
                                    <td> $row[id]         </td>
                                    <td> $row[first_name] </td>
                                    <td> $row[last_name]  </td>
                                    <td> $row[age]        </td>
                                    <td> $row[email]      </td>
                                    <td> $row[department] </td>
                                </tr>
                            HTMLCODE;
                            }
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </body>
</html>