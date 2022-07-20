<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="miabd_news";
    try{
        $db = new PDO("mysql:host=$server;dbname=$database;charset=utf8",$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Erreur : ".$e->getMessage());
    }
?>
