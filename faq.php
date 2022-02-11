<!DOCTYPE html>

<!--
    Original Author: Ayden McCall
    Change Log
    9/2: Instantiation, Javascript set-up and base content
    9/9: Accordion added
    9/10: Accordion Mobile capabilities improved
    9/17: Minor edits to global Accordion settings
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="Frequent questions">
        <meta name="keywords" content="Coffee, Java, FAQ, question and answer">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Java House FAQ</title>

        

        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="css/coffee.css">
    </head>

    <body class="bg-darkblue">
        <!--<nav class="navbar navbar-expand-lg p-3">
            <!--Div 1 is to force div 2 below when neccessary, it is expanded to 100 width when hamburger is clicked->
            <div id="div1">
                <a class="navbar-brand nav-color hoverEffect" id="logo" href="index.html">The Java House</a>
                <button id="hamburgerButton" class="float-end"><i class="fa fa-bars"></i></button>
            </div>

            <div id="topnav">
                <ul class="navbar-nav nav-responsive">
                    <a class="nav-link hoverEffect nav-color" href="index.html"><li class="nav-item">Home</li></a>
                    <a class="nav-link hoverEffect nav-color" href="store.html"><li class="nav-item ">Store</li></a>
                    <a class="nav-link hoverEffect nav-color" href="contact.html"><li class="nav-item active">Contact</li></a>
                    <a class="nav-link hoverEffect nav-color" href="faq.html"><li class="nav-item">FAQ</li></a>
                    <!--<a class="nav-link hoverEffect nav-color" href="#"><li class="nav-item  mobile-only">Cart</li></a>->
                </ul>

            </div>

            <!--<a href="#" class="ml-auto p-1 hoverEffect desktop-only nav-color" id="shopIcon"><i class="fa fa-shopping-cart"> Cart</i></a>->

        </nav>-->
            
            <?php include 'view/nav.php'; ?>



        <header class="text-center">
            <h1>Question and Answer</h1>
        </header>

        <main class="text-center">
            <!-- Trending Pages and Items -->
            <h2 class="mb-4"><i>Commonly asked questions</i></h2>

            <div id="accordion" class="mx-auto">
                <h3>Where do you source your coffee?</h3>
                <div>Our coffee is sourced straight from the Caribian Coffee Company. Grown completely naturally, it is the natural choice for 
                    our discerning customers.</div>
                <h3>What is your return policy?</h3>
                <div>For appliances, we allow returns up to 6 months. For edible products, we allow returns within 2 months so long that they remain unopened.</div>
                <h3>How long will it take for my order to arrive?</h3>
                <div>Our delivery timings vary from product to product, but you can usually expect orders to arrive within 4-5 business
                    days. You can view your orders expected delivery times in your orders as well.</div>
            </div>
        </main>

        <footer class="text-white text-center mt-3">
            <p>Reach out to us through our <a class="nav-color" href="contact.html">contact form!</a></p>
            <a href="#"><i class="fa fa-facebook mx-3" style="font-size: 50px;"></i></a>
            <a href="#"><i class="fa fa-instagram mx-3" style="font-size: 50px;"></i></a>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>