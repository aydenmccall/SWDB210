<?php
//$full_name = filter_input(INPUT_GET, 'full_name');
//require('./employee_db.php')
$employee = select_employee($employee_id);
$full_name = "{$employee['first_name']} {$employee['last_name']}";
?>
<link rel="stylesheet" href="../css/coffee.css">

<?php
if (!empty($full_name)) {
    echo "<h2>$full_name</h2>";
}
?>
<?php foreach ($entries as $entry): ?>
    <div style="background-color:grey" class="w-75 mx-auto">
        <!--<table id="admin-table">
            <tr><th>Email: <?php echo $entry['email_address']; ?></th></tr>
            <tr>
                <td>Date: <?php echo $entry['visit_date']; ?></td>
                <td>Category: <?php echo $entry['category_id']; ?></td>
                <td>Assigned Employee: <?php echo $entry['employee_id']; ?></td>
            </tr>
            <tr><td>Message: <br /><?php echo $entry['visit_msg']; ?></td></tr>
        </table>-->

        <p>Email: <?php echo $entry['email_address']; ?></p>
        <p>Date: <?php echo $entry['visit_date']; ?></p>
        <p>Category: <?php echo $entry['category_id']; ?></p>
        <p>Assigned Employee: <?php echo $entry['employee_id']; ?></p>
        <p>Message: <br /><?php echo $entry['visit_msg']; ?></p>
    </table>

    <form action="." method="post"> <!-- Delete a form submission -->
        <input type="hidden" name="action"
               value="delete_form_entry">
        <input type="hidden" name="entry_id"
               value="<?php echo $entry['visit_id']; ?>">
        <input type="hidden" name="employee_id" 
               value="<?= $entry['employee_id'] ?>">
        <input type="hidden" name="full_name" 
               value="<?= $full_name ?>">
        <input type="submit" value="Delete">
    </form>
    <form action="." method="post"> <!-- Edit a form submission -->
        <input type="hidden" name="action"
               value="edit_form_entry">
        <textarea width="24" length="24" name="message"></textarea>
        <input type="hidden" name="entry_id"
               value="<?php echo $entry['visit_id']; ?>">
        <input type="hidden" name="employee_id" 
               value="<?php echo $entry['employee_id'] ?>">
        <input type="hidden" name="full_name" 
               value="<?php echo $full_name ?>"><br />
        <input type="submit" value="Edit Message">
    </form>

    </div> <br />
<?php endforeach; ?>
<?php include('../view/footer.php'); ?>
