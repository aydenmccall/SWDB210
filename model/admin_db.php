<?php

/*
 * Original Author: Ayden McCall
 * 
 * 2/15/22: Instantiation
 * 2/16/22: Changed global $db to static function
 * 2/17/22: added try-catch statement
 */

//require 'database.php';

function is_valid_admin_login($email, $password) {
    $db = Database::getDB();
    try {
        $query = 'SELECT password FROM administrators '
                . 'WHERE emailAddress = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $admin_hash = $row['password'];
        return password_verify($password, $admin_hash);
    } catch (Exception $ex) {
        $error_message = $ex->getMessage();
        header("location: ../error.php");
        exit();
    }
}
