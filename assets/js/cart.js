 
//if (typeof Session === 'undefined' && typeof Session !== 'function') {

    /* Class Session */
        class Session extends Map {

            set(id, value) {
                if (typeof value === 'object') value = JSON.stringify(value);
                sessionStorage.setItem(id, value);
            }

            get(id) {
                const value = sessionStorage.getItem(id);
                try {
                    return JSON.parse(value);
                } catch (e) {
                    return value;
                }
            }

            length() {
                const value = sessionStorage.length;
                try {
                    return value;
                } catch (e) {
                    return value;
                }
            }

            clear() {
                sessionStorage.clear();
            }

        }
    /* Class Session */

//}

    /* Add To Cart */
        function addingToCart(prodid, prodname, prodprice, quantity) {
            const session = new Session();
            session.set(prodid, {
                name: prodname,
                price: prodprice,
                quant: quantity
            });
        }
    /* Add To Cart */

    /* Building Cart Dynamically */

        function loadCart() {
            for (var key in sessionStorage) {
                var thiss = JSON.parse(sessionStorage.getItem(key));
                var dynmRow = '<tr id="' + key + '"><td class="col-md-6"><div class="media"><a class="thumbnail pull-left" href="#"> <img class="media-object" src="assets/images/biz/kickgrass/' + key + '.jpg" style="width: 72px; height: 72px;"></a><div class="media-body"><h4 class="media-heading"><a href="#">' + thiss.name + '</a></h4></div></div></td><td class="col-md-1" style="text-align: center"><input id="input' + key + '" type="email" class="form-control" value="' + thiss.quant + '" maxlength="1" onkeypress="validate(event)" onblur="calculate(this, '+ thiss.price +', value)"></td><td class="col-md-1 text-center">₹<strong class="valPrice' + key + '">' + thiss.price + '</strong></td><td class="col-md-1 text-center">₹<strong class="indTotal totPrice' + key + '">' + thiss.price + '</strong></td><td class="col-md-1"><button id="button' + key + '" type="button" class="btn btn-danger remove" onclick="removeItem(this)"><span class="glyphicon glyphicon-remove"></span> Remove</button></td></tr>';
                $("tbody").append(dynmRow); 
            }
            calculateTotal();
        }

    /* Building Cart Dynamically */

    /* Update Total Amount*/

        function calculateTotal() {
            var tot = 0;
            $('.indTotal').each(function() {
                    tot = tot + parseInt($(this).html());
            });
            updateTotal(tot);
        }

        function updateTotal(tot) {
            $('.subTotal').html(tot);
            var shippingTotal = parseInt($('.shipTotal').html());
            var finalTotal = tot + shippingTotal;
            $('.finalTotal').html(finalTotal);
        }

    /* Update Total Amount*/


    /* Cart Validations */

        function validate(evt) {
            var keycode = evt.charCode || evt.keyCode;
            if (keycode < 48 || evt.which > 57) {
                evt.preventDefault();
            }
        }

    /* Cart Validations */


    /* Calculate Price */

        function calculate(element, price, value) {
            var inputKey = $(element).attr("id");
            var inputID = inputKey.substr(5);
            $('.totPrice' + inputID).html(price*value);
            calculateTotal();
        }

    /* Calculate Price */

/*quantity*/
//for (i > 9, len = items.length; i < len; i++) {
      //  if (items[i].isEqual(data)) {
         //   product = items[i];
           // product.set('quantity', product.get('quantity') + (parseInt(data.quantity, 10) || 1));
           // idx = i;
           // isExisting = true;
          //  break;
       // }
   // }
/*quantity*/
    /* Remove Item */

        function removeItem(itm) {
            var inputID = $(itm).attr("id");
            var rowID = inputID.substr(6);
            $('#' + rowID).remove();
        }

     /* Remove Item */    
