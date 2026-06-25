<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
     $username = $_POST["username"];
     $pwd = $_POST["pwd"];
     $email = $_POST["email"];

     try{
        require_once "dbh.inc.php";        // we also can add same fields that we entered in dbh file

        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);   //this sends data to database

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        //free resources (btw it can done automaticaly)
        $pwd = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

     }
     catch(PDOException $e){
        die("Query Failed: " . $e->getMessage());

     }
}
else{
   header("Location: ../index.php");
}