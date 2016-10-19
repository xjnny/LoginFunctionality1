<?php 
session_start(); 
include 'partials/header.php';

 if (isset($_SESSION['username'])) {
        if ($_SESSION['role'] === 'Admin') {
        echo "hello admin";
        } else {
        echo "hello user";
        }
 require 'partials/dashboard.php';
 } else {
 require 'partials/intro.php';
 }

 include 'partials/footer.php';
 

 
     
    
    
