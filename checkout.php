<?php include 'common/commonHead.php'; ?>

<body onload="loadCart();">
    <?php require_once 'model/appConnection.php'; ?>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="inner-content">
                <?php include 'common/commonHeader.php'; ?>
                <!--content-->
                <div class="content">
                    <div class="women_main">
                        <!-- start content -->
                        <div class="col-md-6 graph-2 second">
                            <h3 class="inner-tittle">1.Confirm your Identity</h3>
                            <div class="panel panel-primary two">
                                <div class="panel-heading">For Delivery Purpose </div>
                                <div class="panel-body ont two">
                                    <script>
                                        (function() {

                                            // Create input element for testing
                                            var inputs = document.createElement('input');

                                            // Create the supports object
                                            var supports = {};

                                            supports.autofocus = 'autofocus' in inputs;
                                            supports.required = 'required' in inputs;
                                            supports.placeholder = 'placeholder' in inputs;

                                            // Fallback for autofocus attribute
                                            if (!supports.autofocus) {

                                            }

                                            // Fallback for required attribute
                                            if (!supports.required) {

                                            }

                                            // Fallback for placeholder attribute
                                            if (!supports.placeholder) {

                                            }

                                            // Change text inside send button on submit
                                            var send = document.getElementById('register-submit');
                                            if (send) {
                                                send.onclick = function() {
                                                    this.innerHTML = '...Sending';
                                                }
                                            }

                                        })();
                                    </script>
                                    <div class="registration_form">
                                        <!-- Form -->
                                        <form>
                                            <div>
                                                <label>
						<input placeholder="User Name:" type="text" tabindex="1" required value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USERNM']; } ?>">
					</label>
                                            </div>
                                            <div>
                                                <label>
						<input placeholder="Email:" type="text" tabindex="2" value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USEREM']; } ?>">
					</label>
                                            </div>

                                            <div>
                                                <label>
						<input placeholder="Mobile:" type="text" tabindex="3" required value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USERMB']; } ?>">
					</label>
                                            </div>
                                            <div>
                                                <label>
						<input placeholder="Address:" type="text" tabindex="4" required value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USERAD']; } ?>">
					</label>
                                            </div>
                                            <div>
                                                <input type="submit" value="Agree">
                                            </div>
                                            <div class="sky-form">
                                                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>i agree to UDT2&nbsp;<a class="terms" href="#"> terms of service</a> </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    THANK YOU
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 graph-2 second">
                            <h3 class="inner-tittle">2.CHECK Your Cart </h3>
                            <div class="panel panel-primary two">
                                <div class="panel-heading"></div>
                                <div class="panel-body ont two">
                                    <?php include 'common/cartTable.php'; ?>
                                </div>

                                <div class="panel-footer">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 graph-2 second">
                            <h3 class="inner-tittle">3.CHECKOUT</h3>
                            <div class="panel panel-primary two">
                                <div class="panel-heading">Door Delivery ONLY AVAILABLE</div>
                                <div class="panel-body ont two">
                                    <p>READ THE Terms and Conditions For assistance contact:012345679
                                    </p>
                                    <button type="button" class="btn btn-default">
                                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                                    </button>
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> PLACE ORDER</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">ORDER</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>click confirm to place order</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="index.php"><button type="button" class="btn btn-default">confirm</button></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    THANK YOU
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="foot-top">

                    <div class="col-md-6 s-c">
                        <li>
                            <div class="fooll">
                                <h1>follow us on</h1>
                            </div>
                        </li>
                        <li>
                            <div class="social-ic">
                                <ul>
                                    <li><a href="#"><i class="facebok"> </i></a></li>
                                    <li><a href="#"><i class="twiter"> </i></a></li>
                                    <li><a href="#"><i class="goog"> </i></a></li>
                                    <li><a href="#"><i class="be"> </i></a></li>
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                        </li>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 s-c">
                        <div class="stay">
                            <div class="stay-left">
                                <form>
                                    <input type="text" placeholder="Enter your email" required="">
                                </form>
                            </div>
                            <div class="btn-1">
                                <form>
                                    <input type="submit" value="join">
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                </div>
                <?php include 'common/commonFooter.php'; ?>
                <?php include 'common/commonNavigation.php'; ?>x
            </div>
            <!--content-->
        </div>
    </div>
</body>

</html>