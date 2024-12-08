<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'northwind';

    //create database connection
    $conn =new mysqli($host, $user, $password, $dbname);

    //check connection
    if ($conn->connect_error){
        die('<div class="alert alert-danger">Connection Failed: ' . $conn->connect_error . '</div>');
    }
?>