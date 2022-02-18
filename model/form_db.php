<?php

/*
 *  Author: Ayden McCall
 *  Last edited: Ayden McCall
 * Mod Log:
 * 2/2/22: Creation
 * 2/3/22: Delete function created
 * 2/4/22: Added employee selection function
 * 2/11/22: changed to class
 * 2/17/22: Added try-catch to all functions
 */$error_message = '';

class formDB {

    public static function get_form_entries() {
        global $error_message;
        $db = Database::getDB();
        try {
            
            $query = 'SELECT * FROM contacts '
                    . 'WHERE 1 '
                    . 'ORDER BY visit_date';
            $statement = $db->prepare($query);
            $statement->execute();
            $entries = $statement->fetchAll();
            $statement->closeCursor();

            return $entries;
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
            header('location: ../error.php');
            exit();
        }
    }

    public static function get_employee_forms($employee_id) {
        global $error_message;
        try {
            $db = Database::getDB();
            $query = 'SELECT * FROM contact ' //ERROR  CHECK
                    //. 'JOIN employee '
                    //. 'ON contact.employee_id = employee.employee_id '
                    . 'WHERE employee_id = :employee_id '
                    . 'ORDER BY visit_date';
            $statement = $db->prepare($query);
            $statement->bindValue(':employee_id', $employee_id);
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

    public static function delete_form_entry($entry_id) {
        global $error_message;
        try {
            $db = Database::getDB();
            $query = 'DELETE FROM contact '
                    . 'WHERE visit_id = :entry_id';
            $statement = $db->prepare($query);
            $statement->bindValue(":entry_id", $entry_id);
            $statement->execute();
            $statement->closeCursor();
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
            header("location: ../error.php");
            exit();
        }
    }

    public static function edit_form_entry($entry_id, $message) {
        try {
            $db = Database::getDB();
            $query = 'UPDATE contact '
                    . 'SET visit_msg = :message '
                    . 'WHERE visit_id = :entry_id';
            $statement = $db->prepare($query);
            $statement->bindValue(":entry_id", $entry_id);
            $statement->bindValue(":message", $message);
            $statement->execute();
            $statement->closeCursor();
        } catch (Exception $ex) {
            $error_message = $ex->getMessage();
            header('location: ../error.php');
            exit();
        }
    }

}
