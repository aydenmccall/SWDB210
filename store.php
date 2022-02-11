<!DOCTYPE html>

<!--
    Original Author: Ayden McCall
    Pixabay Image Credit: Pexels; Free-Photos; Free-Photos; LoboStudioHamburg; shixugang; AliciaZinn; poedynchuk; danymena88;
    Change Log
    9/14: Creation
    9/15: Buttons linked to cart
    9/16: specific cart item data added; multiple item selection supported
    9/17: mobile support; lots of bugfixing
    9/21: store.js file created, linked to
-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayden McCall">
        <meta name="description" content="Sale of delicious and affordable coffee.">
        <meta name="keywords" content="Coffee, Java, Dark Roast, Light Roast, Storefront">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <title>The Javahouse Storefront</title>

        <link rel="stylesheet" href="css/coffee.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    </head>

    <body class="bg-darkblue">
        <nav class="navbar navbar-expand-lg p-3">
            <!--Div 1 is to force div 2 below when neccessary, it is expanded to 100 width when hamburger is clicked-->
            <div id="div1">
                <a class="navbar-brand nav-color hoverEffect" id="logo" href="index.html">The Java House</a>
                <button id="hamburgerButton" class="float-end"><i class="fa fa-bars"></i></button>
            </div>

            <div id="topnav">
                <ul class="navbar-nav nav-responsive">
                    <a class="nav-link hoverEffect nav-color" href="index.html"><li class="nav-item">Home</li></a>
                    <a class="nav-link hoverEffect nav-color" href="store.html"><li class="nav-item active">Store</li></a>
                    <a class="nav-link hoverEffect nav-color" href="contact.html"><li class="nav-item ">Contact</li></a>
                    <a class="nav-link hoverEffect nav-color" href="faq.html"><li class="nav-item ">FAQ</li></a>
                    <a class="nav-link hoverEffect nav-color" href="admin/"><li class="nav-item ">Admin</li></a>
                </ul>
                    
            </div>
            <div id="accordion" class="mobile-only w-100 text-center">                    
                        <h3>Check Out</h3>
                <div class="cartDiv">
                    <p>Take a moment to confirm your order.</p>
                    <ul class="cart"><li>Cart is Empty.</li></ul>
                    <b class="mx-auto total"></b>
                
                <br>
                <button type="button" class="mt-4">Procced to Payment</button>   
            </div>  
            </div>
            
            
            <a href="#" class="ml-auto p-1 hoverEffect nav-color desktop-only" id="shopIcon">
                <div class="bg-danger float-left" id="shopCounter">*0*</div><i class="fa fa-shopping-cart"> Cart</i></a>
        </nav>

        <header class='modalHeader'>
            <div id="storeModal" class="modal">
                <p>Take a moment to confirm your order.</p>
                <div class="cartDiv">
                    <ul class="cart"><li>Cart is Empty.</li></ul>
                    <b class="mx-auto total"></b>
                </div>
                <br>
                <button type="button" class="mt-auto" rel="modal:close">Procced to Payment</button>
                <a href="#" rel="modal:close"><button>Close</button></a>
            </div>
        </header>

        <main>
            <div>
                <h2>Light-Brew Coffees</h2>
                <p>Coffee with a light, airy flavor, sure to brighten anyone's day.</p>
                <div class="flexBox pb-5">
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>Morning Blend</h4>
                            <img src="img/coffee_light.jpg" alt="Pouring milk into coffee"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="Morning Blend/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>
                                <option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>Hawaiian Roast</h4>
                            <img src="img/coffee_light2.jpg" alt="Cup of coffee with flower design"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="Hawaiian Roast/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>HuckleBerry Blend</h4>
                            <img src="img/coffee_light3.jpg" alt="Coffee splashing in mug"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="HuckleBerry Blend/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                </div>

                <h2>Dark-Brew Coffees</h2>
                <p>Bold and complex flavors, for those with decerning palettes.</p>
                <div class="flexBox pb-5">
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>French Roast</h4>
                            <img src="img/coffee_dark.jpg" alt="Scoop of coffee beans"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="French Roast/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>House Blend</h4>
                            <img src="img/coffee_dark2.jpg" alt="Cup of coffee"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="House Blend/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>Traditional Roast</h4>
                            <img src="img/coffee_dark3.jpg" alt="Cup of coffee"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="Traditional Roast/24.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                </div>

                <h2>Appliances</h2>
                <p>The first step to your perfect homebrew.</p>
                <div class="flexBox">
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>Drip Pot</h4>
                            <img src="img/drip.jpg" alt="Pouring into coffee drip pot"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="Drip Pot/39.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>Espresso Machine</h4>
                            <img src="img/espresso_machine.jpg" alt="Espresso Machine Pouring a shot"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="Espresso Machine/499.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                    <div class="flexChild">
                        <div class="m-1 py-3 bg-navy">
                            <h4>French Press</h4>
                            <img src="img/french_press.jpg" alt="French press brewing"> <br>
                            <button class="purchaseBtn mt-3" type="button" value="French Press/49.99" class="mt-3">Add to Cart</button>
                            <select name="quantity" id="quantityDropdown" class=""><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option></select>
                            <p class="noDisplay mt-3">Added to Cart!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>

        <footer class="text-white text-center mt-3">
            <p>Reach out to us through our <a class="nav-color" href="contact.html">contact form!</a></p>
            <a href="#"><i class="fa fa-facebook mx-3" style="font-size: 50px;"></i></a>
            <a href="#"><i class="fa fa-instagram mx-3" style="font-size: 50px;"></i></a>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="js/store.js"></script>
        <script src="js/coffee.js"></script>
    </body>
</html>