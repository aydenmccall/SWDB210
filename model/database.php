<?php

/*
 * Ayden McCall : Created 1/28/22
 * Ayden McCall : Last edited 1/28/22
 * 
 * Change Log: 
 *  1/28/22: Creation
 *  2/11/22: Changed to use classes 
 * 2/17/22: changed catch's include(error) to header(error)
 */

$error_message = '';

class Database {

private static $dsn = "mysql:host=localhost;dbname=javahouse"; //CHANGE BACK
private static $username = "javahouseadmin"; //JAVAHOUSEADMIN
private static $password = "Pa55word"; //Pa55word
private static $db;

public static function getDB() {
    global $error_message;
    try {
        self::$db = new PDO(self::$dsn, self::$username, self::$password);
        
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        $error_message = $e->getMessage();
        header("location: ../error.php");
        exit();
    }
    return self::$db;
}

}
?>
