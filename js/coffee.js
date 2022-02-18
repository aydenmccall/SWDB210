/*
 Original Author: Ayden McCall
 Change Log
 8/26: File Creation and initialization
 8/27: Added newsletter events, hamburger event
 8/29: Reworked hamburger event
 9/2: Added form support for contact page, FAQ links established
 9/8: Jquery added, doesn't work
 9/9: Jquery breaks literally every single webpage, fix in progress
 9/10: jQuery fixed on case by case basis; carousel fully functional
 9/14: Begun shop support
 9/15: Id's and cart data created
 9/16: Modal Component Added
 9/17: styling added; carousel buffering smoothed
 9/21: store files relocated to store.js
 9/22: Shop timer implemented on buttons to avoid spam inputs
 */

"use strict";

//const $ = selector => document.querySelector(selector);

function newsLetterError() {
    const errorMsg = "\nEmail is invalid.";

    $("#newsletterError").addClass("display");
    $("#newsletterError").addClass("failed");
    $("#newsletterError").text(errorMsg);
    $("#newsletterEmail").val("")
    $("#newsletterEmail").focus();
}
;

//NewsLetter
function registerNewsletterEmail() {
    const email = $("#newsletterEmail").val();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!isNaN(email) || email == "" || !emailPattern.test(email)) {
        newsLetterError();
    } else {
        $("#newsletterEmail").val("");
        $("form").fadeOut(200);
        $("#newsletterCompletion").delay(190).fadeIn(200);
    }
}
;//End Newsletter






$(document).ready(function () {
    if ($("#submitNewsletterEmail").length) {
        $("#submitNewsletterEmail").on("click", registerNewsletterEmail);
    }//End NewsletterButton
    $("#hamburgerButton").on("click", () => {
        const nav = document.querySelector("#topnav");
        nav.classList.toggle("active");
    });//End Hamburger
    console.log("BULLSHIT BLAZING")
    // Contact Form
    if ($("#submitBtn") != null) {
        $("#submitBtn").submit(function(event) {
            
            alert("OMG 1");

            $("#errorList").empty();

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const errorList = $("#errorList");
            const email = $("#emailInput").val();
            const message = $("#messageArea").val();
            let isValid = true;


            if (email === "" || !emailPattern.test(email)) {
                let error = document.createElement("LI");
                // error.appendChild(document.createTextNode("Email cannot be left empty./n"));
                if (email === "") {
                    error.textContent = "Email cannot be left empty. \n";
                } else {
                    error.textContent = "Email is invalid. \n";
                }

                errorList.addClass("display");
                errorList.append(error);
                isValid = false;
            }
            if (message == "") {
                let error = document.createElement("LI");
                error.textContent = "Please leave a message. \n";
                errorList.addClass("display");
                errorList.append(error);
                isValid = false;
            }
            
            
            //if (isVaild) {
                event.preventDefault();
            //}
            alert("OMG 2");
            /*if (isValid) {
             $("#contactForm").fadeOut(200);
             if ($("#businessRadio").is(":checked")) {
             $("#contactForm").next().text("Thank you for your inquery! Expect a response within 2-3 business days.");
             } else if ($("#questionRadio").is(":checked")) {
             $("#contactForm").next().text("Thank you for your patience, we'll get back to you as soon as possible. Make " +
             "sure to check the FAQ board in the meantime!");
             }
             $("#contactForm").next().delay(190).fadeIn(200);
             } */
        });
    }//End Contact Form

    //Accordion
    if ($("#accordion").length) {
        $("#accordion").accordion({
            collapsible: true,
            active: false,
            animate: 300
        });
    }//End Accordion

    //Carousel
    if ($(".carousel").length) {
        let links = $(".carouselImage");
        let selected = 0;
        let buffered = false;
        links[selected].classList.remove("noDisplay");

        function endBuffer() {
            buffered = false;
        }

        function carouselForward() {
            buffered = true;
            jQuery(links[selected]).fadeOut(400);
            selected += 1;
            if (selected > links.length - 1) {
                selected = 0;
            }
            jQuery(links[selected]).delay(400).fadeIn(400);
            setTimeout(endBuffer, 820);
        }

        let timer = setInterval(carouselForward, 5000);

        function resetTimer(func, seconds) {
            clearInterval(timer);
            timer = setInterval(func, (seconds * 1000));
        }
        //eventListeners for both buttons
        $("#leftButton").on("click", () => {
            if (buffered === false) {
                buffered = true;
                jQuery(links[selected]).fadeOut(400);
                selected -= 1;
                if (selected < 0) {
                    selected = links.length - 1;
                }
                resetTimer(carouselForward, 5);
                jQuery(links[selected]).delay(400).fadeIn(400);
                setTimeout(endBuffer, 820);
            }


        });
        $("#rightButton").on("click", () => {
            if (buffered === false) {
                carouselForward();
                resetTimer(carouselForward, 5);
            }

        });
    }//End Carousel

    // Start Shop
    //let cartItems = [];
    if ($(".purchaseBtn").length) {
        const purchaseBtns = $(".purchaseBtn");
        for (let i = 0; i < purchaseBtns.length; i++) {
            let animationTimer;
            let animationPlaying = false;
            $(purchaseBtns[i]).on("click", () => {
                const val = $(purchaseBtns[i]).val().split("/");
                const quantity = $(purchaseBtns[i]).next().val();
                const confirmText = $(purchaseBtns[i]).next().next();

                // Animation Timer
                if (!animationPlaying) {
                    cart.confirmAdded(confirmText);
                    animationPlaying = true;
                    animationTimer = setTimeout(() => {
                        animationPlaying = false;
                    }, 2400);
                }

                cart.addItem(val[0], parseFloat(val[1]), quantity);
            });
        }
    }// End Shop

    //Cart 
    if ($("#shopIcon").length) {
        $("#shopIcon").click("click", () => {
            $("#storeModal").modal({
                fadeDuration: 100,
                showClose: false
            });
        })
    }//End Cart

});// End Document Start  