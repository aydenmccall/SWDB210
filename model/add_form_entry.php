<?php
/*
 * Original Author: Ayden McCall
 * 
 * Change Log:
 * 1/28/22: Instantiation
 */
require_once('database.php');

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$category_id = filter_input(INPUT_POST, 'subject', FILTER_VALIDATE_INT);
$message = filter_input(INPUT_POST, 'message');
$employee_id = rand(1, 20);


    $query = "INSERT INTO contact(email_address, category_id, visit_msg, visit_date, employee_id) "
            . "VALUES (:email, :category_id, :message, NOW(), :random)";
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':random', $employee_id);
    $statement->execute();
    $statement->closeCursor();
    
    include('./thankyou.php');
    exit();
