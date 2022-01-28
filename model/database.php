<?php

/*
 * Ayden McCall : Created 1/28/22
 * Ayden McCall : Last edited 1/28/22
 * 
 * Change Log: 
 *  1/28/22: Creation
 */

$dsn = "mysql:host=localhost;dbname=javahouse";
$username = "javahouseadmin";
$password = "Pa55word";

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('./error.php');
    exit();
}
?>
