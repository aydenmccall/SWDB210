<?php

/*
 *  Author: Ayden McCall
 *  Last edited: Ayden McCall
 * Mod Log:
 * 2/4/22: Creation, copied and modified values from form_db.php
 */

require('database.php');

function get_employees() {
    global $db;
    $query = 'SELECT * FROM employee '
            . 'WHERE 1';
    $statement = $db->prepare($query);
    $statement->execute();
    $entries = $statement->fetchAll();
    $statement->closeCursor();

    return $entries;
}

function select_employee($employee_id) {
    global $db;
    $query = 'SELECT * FROM employee '
            . 'WHERE employee_id = :employee_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':employee_id', $employee_id);
    $statement->execute();
    $employee = $statement->fetch();
    $statement->closeCursor();
    
    return $employee;
}
