/*
 Original Author: Ayden McCall
 Change Log
 9/21: Creation, relocate files from main js
 9/22: Button Confirmations added
 */

"use strict";

const cart = (() => {
    let cartItems = [];
    let dollarUS = Intl.NumberFormat("en-US", {
        style: "currency",
        currency: "USD",
    });
    return {
        addItem(name, price, amount) {
            let newItem = true;
            for (let i = 0; i < cartItems.length; i++) {
                if (name == cartItems[i][0]) {
                    const current = cartItems[i][2];
                    cartItems[i][2] = parseInt(parseInt(current) + parseInt(amount));
                    newItem = false;
                    break;
                }
                ;
            }
            if (newItem == true) {
                let item = [name, price, amount]

                cartItems.push(item);
            }
            this.refreshCart();
        }, //End Add Item
        removeItem(index) {
            cartItems.splice(index, 1);
            this.refreshCart();
        }, // End Remove Item
        refreshCart() {
            $(".cart").empty();
            let quantity = 0;
            let total = 0;
            for (let i = 0; i < cartItems.length; i++) {
                let item = document.createElement("li");
                let priceInt = parseFloat(cartItems[i][1]) * parseInt(cartItems[i][2]);
                $(item).text(`${cartItems[i][2]} ${cartItems[i][0]}(s) - ${dollarUS.format(priceInt)}`);

                // append remove link to LI Element 
                let removeItem = document.createElement("a");
                $(removeItem).text("   | Remove");
                $(removeItem).addClass("remove");
                $(item).append(removeItem);
                $(removeItem).on("click", () => {
                    this.removeItem(i);
                });

                $(".cart").append(item);
                quantity += parseInt(cartItems[i][2]);
                total += priceInt;
            }
            $("#shopCounter").text(`*${quantity}*`);
            $(".total").text(`Total: ${dollarUS.format(total)}`);
            if (!cartItems.length) {
                let item = document.createElement("li");
                $(item).text("Cart is Empty.");
                $(".cart").append(item);
            }
        }, //End Refresh Cart
        confirmAdded(element) {
            $(element).show(1000);
            $(element).delay(1000).hide("slide", {direction: "right"}, 400);
        }
    } // End Return
})(); // End Cart