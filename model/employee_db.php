<?php

/*
 *  Author: Ayden McCall
 *  Last edited: Ayden McCall
 * Mod Log:
 * 2/4/22: Creation, copied and modified values from form_db.php
 * 2/11/22: Altered to use Database class, class reformating
 * 2/17/22: Added try-catch to all functions
 */

//include 'database.php';
$error_message = '';
class EmployeeDB {

    public static function get_employees() {
        // RETURN ALL EMPLOYEES
        global $error_message;
        try {
            $db = Database::getDB();
            $query = 'SELECT * FROM employee '
                    . 'WHERE 1';
            $statement = $db->prepare($query);
            $statement->execute();
            $entries = $statement->fetchAll();
            $statement->closeCursor();

            return $entries;
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
            header("location: ../error.php");
            exit();
        }
    }

    public static function select_employee($employee_id) {
        // RETURN EMPLOYEES MATCHED TO ID
        // ID'S ARE UNIQUE
        global $error_message;
        try {
            $db = Database::getDB();
            $query = 'SELECT * FROM employee '
                    . 'WHERE employee_id = :employee_id';
            $statement = $db->prepare($query);
            $statement->bindValue(':employee_id', $employee_id);
            $statement->execute();
            $employee = $statement->fetch();
            $statement->closeCursor();

            return $employee;
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
            header("location: ../error.php");
            exit();
        }
    }

}
