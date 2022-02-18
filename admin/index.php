<?php
/*
 *  Author: Ayden McCall
 * last edited: Ayden McCall
 * Mod Log:
 * 2/2/22: Instatiation, Form entry's data displayed
 * 2/3/22: Form delete button added, files moved to admin folder
 * 2/16/22: Added admin sign-in page, added listemployees as default view
 */
require('../model/database.php');

require_once('../util/secure_conn.php'); // Admin login form
require_once('../util/valid_admin.php'); // Login Admin

require('../model/form_db.php');
require('../model/employee_db.php');

$action = filter_input(INPUT_POST, 'action');
if (empty($action)) {
    $action = filter_input(INPUT_GET, 'action');
}
switch ($action) {
    case 'forms_by_employee':
        $selected_page = 'forms_by_employee.php';
        break;
    case 'delete_form_entry':
        $employee_id = filter_input(INPUT_POST, 'employee_id');

        $selected_page = 'form_view.php';
        $delete_id = filter_input(INPUT_POST, 'entry_id');
        if (empty($delete_id)) {
            $error = 'Invalid delete id, please try again.';
            break;
        }
        FormDB::delete_form_entry($delete_id);
        $entries = FormDB::get_employee_forms($employee_id);
        $delete_id = null;

        break;
    case 'edit_form_entry':
        $entry_id = filter_input(INPUT_POST, 'entry_id');
        $message = filter_input(INPUT_POST, 'message');
        FormDB::edit_form_entry($entry_id, $message);

        $employee_id = filter_input(INPUT_POST, 'employee_id');
        $entries = FormDB::get_employee_forms($employee_id);
        $selected_page = 'form_view.php';

        break;

    case 'select_employee':
        $employee_id = filter_input(INPUT_GET, 'employee_id');
        $entries = FormDB::get_employee_forms($employee_id);
        $selected_page = 'form_view.php';

        break;

    default:
        $selected_page = 'listemployees.php';
        $employees = EmployeeDB::get_employees();
        break;
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="Administrative Javahouse Page">
        <link rel="icon" type="../image/ico" href="../img/favicon.ico">
        <title>The Java House Admin</title>

        <link rel="stylesheet" href="../css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="../js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="bg-darkblue">

        <?php include 'view/nav.php'; ?>

        <header class="text-center"><h1>Admin View</h1></header>

        <div class="secondary-nav d-flex mx-auto w-50">

            <div class="d-inline text-white bg-navy p-1 mx-auto"><a href="index.php" class="h5"
                                                                    >Home</a></div>
            <div class="d-inline text-white bg-navy p-1 mx-auto"><a href="?action=forms_by_employee" class="h5">Employee Forms</a></div>

        </div>-


        <main> <!-- Iterate through form submissions --> 
            <?php include($selected_page); ?>
        </main>


        <footer class="text-white text-center mt-3">
            <p>Reach out to us through our <a class="nav-color" href="../contact.php">contact form!</a></p>
            <a href="#"><i class="fa fa-facebook mx-3" style="font-size: 50px;"></i></a>
            <a href="#"><i class="fa fa-instagram mx-3" style="font-size: 50px;"></i></a>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="../js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="../js/coffee.js"></script>
    </body>
</html>