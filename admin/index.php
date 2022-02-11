<?php
/*
 *  Author: Ayden McCall
 * last edited: Ayden McCall
 * Mod Log:
 * 2/2/22: Instatiation, Form entry's data displayed
 * 2/3/22: Form delete button added, files moved to admin folder
 */
require('../model/form_db.php');
require('../model/employee_db.php');

//$database = new DB();

$action = filter_input(INPUT_POST, 'action');
if (empty($action)) {
    $action = filter_input(INPUT_GET, 'action');
}
switch ($action) {
    /*case 'form_view':
        $selected_id = 'form_view.php';
        //$entries = get_form_entries();
        break;*/
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
        //$employee = select_employee($employee_id);
        $entries = FormDB::get_employee_forms($employee_id);
        $selected_page = 'form_view.php';
                
        break;
    
    default:
        $selected_page = 'employee_view.php';
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
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House Admin</title>

        <link rel="stylesheet" href="../css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="../js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="bg-darkblue">
        <nav class="navbar navbar-expand-lg p-3">
            <!--Div 1 is to force div 2 below when neccessary, it is expanded to 100 width when hamburger is clicked-->
            <div id="div1">
                <a class="navbar-brand nav-color hoverEffect" id="logo" href="../index.php">The Java House</a>
                <button id="hamburgerButton" class="float-end"><i class="fa fa-bars"></i></button>
            </div>

            <div id="topnav">
                <ul class="navbar-nav nav-responsive">
                    <a class="nav-link hoverEffect nav-color" href="../index.php"><li class="nav-item active">Home</li></a>
                    <a class="nav-link hoverEffect nav-color" href="../store.php"><li class="nav-item ">Store</li></a>
                    <a class="nav-link hoverEffect nav-color" href="../contact.php"><li class="nav-item ">Contact</li></a>
                    <a class="nav-link hoverEffect nav-color" href="../faq.php"><li class="nav-item ">FAQ</li></a>
                </ul>
            </div>
        </nav>

        <header class="text-center"><h1>Admin View: Form Submissions</h1></header>

        <main> <!-- Iterate through form submissions --> 
            <?php include($selected_page); ?>
        </main>


        <footer class="text-white text-center mt-3">
            <p>Reach out to us through our <a class="nav-color" href="contact.html">contact form!</a></p>
            <a href="#"><i class="fa fa-facebook mx-3" style="font-size: 50px;"></i></a>
            <a href="#"><i class="fa fa-instagram mx-3" style="font-size: 50px;"></i></a>
        </footer>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="../js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="../js/coffee.js"></script>
    </body>
</html>