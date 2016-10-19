<?php

function initDB(){
    global $db;
    //hard coded values only for these exercises, will should use config
    $dsn = "mysql:host=localhost;dbname=authdb;charset=utf8";
    $username = "root";
    $password = "root";
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (Exception $ex) {
        throw new Exception('DB connection error: ' . $ex->getMessage());
    }
}

function getUserDetails($username, $password){
    global $db;
    $stmt = $db->query('SELECT username, password, role FROM users WHERE username = "'.$username.'" AND password = "'.$password.'" ');
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function getArticles(){
    global $db;
  $stmt = $db->query('SELECT * FROM article');
//    $stmt = $db->query('SELECT users.first_name, users.last_name article. FROM users LEFT JOIN articles ON artiles.id=users.id');
    $row = $stmt->fetchAll(PDO::FETCH_NUM);
return $row;
}

initDB();










