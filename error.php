<?php
/**
 * author: Ayden McCall
 * 
 * 2/14/22: Instantiation
 * 2/16/22: Configured to standalone page
 */
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="Sale of delicious and affordable coffee.">
        <meta name="keywords" content="Coffee, Java, Dark Roast, Light Roast, Affordable, Homepage">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House Home</title>

        <link rel="stylesheet" href="css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
              integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body class="bg-darkblue">

        <?php include 'view/nav.php'; ?>
        <main>
            <h2>Oops! Something went wrong.</h2>
            <h3><a href="index.php">Back to home</a></h3>
            <?php if (isset($error_message)) : ?>
                <h4>Error: <?php echo $error_message; ?></h4>
            <?php endif; ?>
        </main>
        
        <?php include 'view/footer.php' ?>
    </body>
</html>