<div class="header-section">
    <div class="header_bg">
        <div class="header">
            <div class="head-t">
                <!-- start header_right -->
                <div class="header_right">
                    <div class="rgt-bottom">
                        <div class="log">
                            <?php if(!isset($_SESSION['USERNM'])) { ?>
                            <div class="login">
                                <div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
                                    <div id="loginBox" style="display: none;">
                                        <form id="loginForm">
                                            <fieldset id="body">
                                                <fieldset>
                                                    <label for="email">Mobile Number</label>
                                                    <input type="text" name="email" id="mobl">
                                                </fieldset>
                                                <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="pass">
                                                </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                            <span><a href="#">Forgot your password?</a></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="login">
                                <div id="signout">
                                    <button id="signout" data-hover="Signout" type="button1" class="button1">
                                        <span><?php { echo $_SESSION["USERNM"]; } ?></span>
                                    </button>

                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="reg">
                            <a href="register.php">SIGNUP</a>
                        </div>
                        <div class="cart box_1">
                            <a href="cart.php">
                                <h3><span class="simpleCart_total"></span><span id="simpleCart_quantity" class="simpleCart_quantity"></span><img src="images/bag.png" alt=""></h3>
                            </a>
                            <p>
                                <a href="javascript:;" class="simpleCart_empty"></a>
                            </p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="create_btn">
                            <a href="cart.php"></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="" placeholder="search...">
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>