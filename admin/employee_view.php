
<link rel="stylesheet" href="../css/coffee.css">

    <?php foreach ($employees as $employee): ?>
<?php $full_name = "{$employee['first_name']} {$employee['last_name']}"; ?>
        <a href="?action=select_employee&employee_id=<?php echo $employee['employee_id']?>&full_name=<?=$full_name?>">
            <?php echo $employee['first_name'], " ",
                    $employee['last_name']; ?>
        </a>
        <br />
   <?php endforeach; ?>
