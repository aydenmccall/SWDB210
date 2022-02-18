<?php

/*
 *  Author: Ayden McCall
 * last edited: Ayden McCall
 * Mod Log:
 * 2/9/22: Instatiation
 */
    //include 'model/employee_db.php';
    
    $employees = EmployeeDB::get_employees();

?>

        <header class="text-center">
            <h1>Employees</h1>
        </header>

        <main>
            <?php foreach ($employees as $employee): ?>
            <p><?php echo "{$employee['first_name']} "
            . "{$employee['last_name']}"; ?></p>
            <?php endforeach; ?>
        </main>


