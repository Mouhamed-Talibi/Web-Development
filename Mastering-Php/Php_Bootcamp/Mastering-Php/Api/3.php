<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api-Training</title>
</head>
<body>
    <form action="" method="GET">
        <h2>This is the get method</h2>
        <br>
        <?php 
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");

            if($_SERVER['REQUEST_METHOD' === "GET"]){
                $connect = mysqli_connect("localhost", "root", "", "rest_api");
                $selection = mysqli_query($connect, "SELECT * FROM users");
                if($selection){
                    echo json_encode($selection);
                    echo json_encode(["message"=>"Selecting users successfully"]);
                }
            }
        ?>
    </form>
</body>
</html>