<?php
    /*
        - Secure Uplaods :
        ------------------
            * Rename file uploads 
            * check file extension 
            * check files Mime type
            * check for files size
    */

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_FILES['image']) && !empty($_FILES['image'])){
            // set vars
            $imageName = $_FILES['image']['name'];
            $imageSize = $_FILES['image']['size'];
            $imageTmp  = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];
            
            // secure uplaods
            $currExtension = explode(".", $imageName);
            $imageExtension = end($currExtension);
            $imageName      = uniqid() . "." . $imageExtension;
            
            // Allowed Extensions : 
            $allowedExs = array('jpg', 'png', 'jpeg', 'gif');
            $allowedMimeTypes = array('image/jpg', 'image/png', 'image/jpeg', 'image/gif');
            if(in_array($imageExtension, $allowedExs)){
                if(in_array($imageExtension, $allowedMimeTypes)){
                    if(filesize($imageName) < 2024){
                        echo "Image Is Valid";
                    } 
                    else{
                        echo "Image Size is large !";
                    }
                } 
                else{
                    echo "Image Mime Type not valid !";
                }
            } 
            else{
                echo "Image extension not valid !";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Uploads</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <label for="">Uplaod Image</label>
            <br><br>
            <input type="file" name="image" id="">

            <input type="submit" value="Send">
        </div>
    </form>
</body>
</html>