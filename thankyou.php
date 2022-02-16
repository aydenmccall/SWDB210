<?php
require_once('model/add_form_entry.php');
?>
<!DOCTYPE html>
<!--
    Original Author: Ayden McCall
    Change Log
    1/28/22: Instantiation
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="The Javahouse's Contact Page">
        <meta name="keywords" content="Coffee, Java, ContactForm">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House Contact</title>

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/coffee.css">
    </head>

    <body class="bg-darkblue">
       
        <?php include 'view/nav.php'; ?>


        <header class="text-center">
            <h1>Thank you!</h1>
        </header>

        <main>
            <h2>Thank you for your message! We'll get back to you as soon as possible!</h2>
            <p>Your assigned employee is <?=$full_name?></p>
        </main>

        <?php include 'view/footer.php'; ?>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>