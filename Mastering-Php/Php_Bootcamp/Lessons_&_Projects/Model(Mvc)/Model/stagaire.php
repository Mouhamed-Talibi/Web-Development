<?php
    function database_connection(){
        return mysqli_connect("localhost", "root", "", "ofppt");
    }

    function Latest(){
        $connection = database_connection();
        $stagaires = mysqli_query($connection, "SELECT * FROM stagaires ORDER BY id DESC");
        return $stagaires;
    }

    function create(){
        $connection = database_connection();
        // stagaire info : 
        $nom = mysqli_real_escape_string($connection, $_POST['nom']);
        $prenom = mysqli_real_escape_string($connection, $_POST['prenom']);
        $age =intval($_POST['age']);
        $login = mysqli_real_escape_string($connection, $_POST['login']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        // insertion of data : 
        $stmt = mysqli_prepare($connection, "INSERT INTO stagaires(nom, prenom, age, login, password) VALUES(?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "ssiss", $nom, $prenom, $age, $login, $password);
        return mysqli_stmt_execute($stmt);
    }

    function view($id){
        if(isset($id)){
            $connection = database_connection();
            $valid_id = intval($id);
            $stmt = mysqli_prepare($connection, "SELECT * FROM stagaires WHERE id=?");
            mysqli_stmt_bind_param($stmt, "i", $valid_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $stagaire = mysqli_fetch_assoc($result);
            return $stagaire;
        }
    }
    function edit($nom, $prenom, $age, $login, $password, $id){
        // start connection :
        $connection = database_connection();
        // prepare stmt : 
        $stmt = mysqli_prepare($connection, 
                            "UPDATE stagaires 
                                    SET nom=?, 
                                        prenom=?, 
                                        age=?, 
                                        login=?, 
                                        password=? 
                                    WHERE id=?
                ");
        mysqli_stmt_bind_param($stmt, "ssissi", $nom, $prenom, $age, $login, $password, $id);
        mysqli_stmt_execute($stmt);
    }

    function destroy($id){
        if(isset($id)){
            $connection = database_connection();
            $stmt = mysqli_prepare($connection, "DELETE FROM stagaires WHERE id=?");
            mysqli_stmt_bind_param($stmt, "i", $id);
            return mysqli_stmt_execute($stmt);
        }
    }