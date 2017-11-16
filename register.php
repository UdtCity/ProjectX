<?php include 'common/commonHead.php'; ?>

<body>
    <?php require_once 'model/appConnection.php'; ?>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
                <?php include 'common/commonHeader.php'; ?>
                <!--content-->
                <div class="content">
                    <div class="women_main">
                        <div class="registration">
                            <div class="registration_left">
                                <h2>new user? <span> create an account </span></h2>
                                <div class="registration_form">
                                    <form id="signup">
                                        <div>
                                            <label><input id="name" placeholder="UserName:" type="text" tabindex="1" required></label>
                                        </div>
                                        <div>
                                            <label><input id="email" placeholder="email:" type="email" tabindex="2" required></label>
                                        </div>
                                        <div>
                                            <label><input id="mobile" placeholder= "+91 phone number:" maxlength="10" type="text" tabindex="3" required></label>
                                        </div>
                                        <div>
                                            <label><input id="pass1" placeholder="password" type="password" tabindex="4"required></label>
                                        </div>
                                        <div>
                                            <label>
                                                    <input id="pass2" placeholder="retype password" type="password" tabindex="5"required>
                                                    <div id="pass" style="display:none">
                                                        <br>Password doesn't Match <span class="glyphicon glyphicon-remove"></span>
                                                    </div>
                                                </label>
                                        </div>
                                        <div>
                                            <label>
                                                    <input id="address" placeholder="Address" type="text" tabindex="6" required>
                                                </label>

                                        </div>
                                        <div>
                                            <input id="signup" type="submit" onclick="function ValidateContactForm()" value="create an account">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="registration_left">
                                <h2>existing user</h2>
                                <div class="registration_form">
                                    <!-- Form -->
                                    <form>
                                        <div>
                                            <label><input id="mobl" placeholder="Mobile No/username" type="text" tabindex="3" required></label>
                                        </div>
                                        <div>
                                            <label><input id="pass"placeholder="password" type="password" tabindex="4" required=""></label>
                                        </div>

                                        <div>
                                            <input type="submit" value="sign in">
                                        </div>
                                        <div class="forget">
                                            <a href="#">forgot your password</a>
                                        </div>
                                    </form>
                                    <!-- /Form -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
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
                                            <input type="text" placeholder="Enter your email" required>
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
                    </div>
                </div>
                <!--content-->
                <?php include 'common/commonFooter.php'; ?>
                <?php include 'common/commonNavigation.php'; ?>
            </div>
        </div>
    </div>
</body>
<script>
    /*emailvalidation*/
    
     function validate(email) {

            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            //var address = document.getElementById[email].value;
            if (reg.test(email) == false) 
            {
                alert('Invalid Email Address');
                return (false);
            }
 }
/*mobilevalidation*/
    function testInput1(event1) {
   var value = String.fromCharCode(event1.which);
   var pattern = new RegExp(/[0-9 ]/i);
   return pattern.test(value);
}

$('#mobile').bind('keypress', testInput1)
    
</script>
</html>