<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


function getDataUser() {
    include('./assets/config.php');

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    return $result;
}