<!DOCTYPE html>

<!--
    Original Author: Ayden McCall
    
    2/16/22: Instantiation
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <!--<meta name="description" content="Administrative Javahouse Page">-->
        <link rel="icon" type="/image/ico" href="../img/favicon.ico">

        <link rel="stylesheet" href="../css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="../js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="bg-darkblue">
        
       <?php include 'view/nav.php'; ?>
        
        <main> 
            <h2>Authentication Error</h2>
            <h3>You must be logged in to see this page.</h3>
            <p><a href="../index.php">Return to home</a></p>
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