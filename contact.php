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

        <?php include 'view/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>