<!DOCTYPE html>

<!--
    Original Author: Ayden McCall
    Change Log
    8/31: Instantiation
    9/1: Incomplete Form addition
    9/2: Form Completion, exclusive style sheet created
    9/9: jQuery bugfixing and retrofitting
    9/17: Email validation and placeholders added
    1/28/22: php form submission added
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
            <h1>Get in touch with our staff!</h1>
        </header>

        <main>

            <ul id="errorList"></ul>
            <form id="contactForm" action='thankyou.php' method='post'>
                <!--<input type='hidden' name='action'
                       value='add_form_entry'>-->
                <label for="emailInput">Email: </label>
                <input type="text" name='email' required id="emailInput" onclick="this.select();" placeholder="anyone@anywhere.com">
                <label for="emailInput" class="required">*</label> <br>

                <label for="questionRadio">Suggestion: </label>
                <input type="radio" id="suggestionRadio" name="subject" value="3" checked>
                <label for="questionRadio">Question: </label>
                <input type="radio" id="questionRadio" name="subject" value="2"> 
                <label for="businessRadio">Business Inquiry: </label>
                <input type="radio" id="businessRadio" name="subject" value="1"> <br>

                <textarea rows="4" cols="40" name='message' required id="messageArea" onclick="this.select();" placeholder="Enter your message here!"></textarea> <br>

                <input type="submit" id="submitBtn" value='Submit' />
            </form>
            <h2 class="noDisplay">Thank you for your message! We'll get back to you as soon as possible!</h2>
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