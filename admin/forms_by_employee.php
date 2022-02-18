<?php
/*
 *   Created by: Ayden McCall
 * 
 * 2/8: Instantiation
 * 2/16: renaming to forms_by_employee; employees declared in-file
 *  
 */

$employees = EmployeeDB::get_employees();
?>


<link rel="stylesheet" href="../css/coffee.css">

<?php foreach ($employees as $employee): ?>
    <?php $full_name = "{$employee['first_name']} {$employee['last_name']}"; ?>
    <a href="?action=select_employee&employee_id=<?php echo $employee['employee_id'] ?>&full_name=<?= $full_name ?>">
        <?php echo $employee['first_name'], " ",
        $employee['last_name'];
        ?>
    </a>
    <br />
<?php endforeach; ?>
