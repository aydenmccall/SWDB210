<?php

/*
 * Ayden McCall : Created 1/28/22
 * Ayden McCall : Last edited 1/28/22
 * 
 * Change Log: 
 *  1/28/22: Creation
 *  2/11/22: Changed to use classes 
 */

$error_message = '';

class Database {

private static $dsn = "mysql:host=localhost;dbname=javahouse";
private static $username = "javahouseadmin";
private static $password = "Pa55word";
private static $db;
public function __construct() {
    
}

public static function getDB() {
    global $error_message;
    try {
        self::$db = new PDO(self::$dsn, self::$username, self::$password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('./error.php');
        exit();
    }
    return self::$db;
}

}
?>
