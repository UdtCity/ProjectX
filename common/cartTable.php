<div class="row">
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <!--Cart Contents goes here-->
            </tbody>

            <tfoot>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <h5>Subtotal<br>Estimated shipping</h5>
                        <h3>Total</h3>
                    </td>
                    <td class="text-right">
                        <h5>₹<strong class="subTotal">0.0</strong><br>₹<strong class="shipTotal">20.0</strong></h5>
                        <h3>₹<strong class="finalTotal">20.0</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                    <td>
                        <button id="checkOut" type="button" class="btn btn-success" onclick="checkOut()">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button>
                    </td>
                </tr>
            </tfoot>
            
        </table>
    </div>
</div>
<script>
    function checkOut() {
        var url = 'model/kickGrassHotel/CartCheckOut.php';
        if(sessionStorage.length != 0) {
        
            $.ajax({
                    url: url,
                    data: {
                        Items: sessionStorage,
                        Class: 'KICKGRASS'
                    },
                    method: "POST"
                })
                .done(function (json) {
                    var response = json;
                    if (response === 'Success') {
                        sessionStorage.clear();
                        window.location = 'cart.php';
                    } else {
                        window.location = 'index.php';
                    }
                })
                .fail(function (xhr, status, errorThrown) {
                    console.log(xhr);
                });
        }
    }
</script>