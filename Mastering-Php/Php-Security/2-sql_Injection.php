<?php
    include_once "config/connect.php";
    /*
        Sql Injection :
        ---------------
            1- filter inputs
            2- filter get and post
            3- check for count records
    */

    // simple select record : 
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $userId = $_GET['id'];
        $validId = filter_var($userId, FILTER_VALIDATE_INT, FILTER_SANITIZE_NUMBER_INT);
        $stmt = mysqli_prepare($connect, "SELECT * FROM members WHERE id=?");
        mysqli_stmt_bind_param($stmt, "i", $validId);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);

        if($count > 0) {
            // get data :
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $age = $row['age'];
                $department = $row['department'];
            }

            // print data :
            echo $name . "<br>";
            echo $age . "<br>";
            echo $department . "<br>";
        } else{
            echo "No Data Found !";
        }
    }
    else{
        echo "Access Denied !";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql INjection</title>
</head>
<body>
</body>
</html>