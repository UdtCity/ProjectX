$(document).ready(function () {

/* User Login  */
    $("#loginForm").on("submit", function (event) {
        var mobl = $('#mobl').val();
        var pass = $('#pass').val();
        loginUser(mobl, pass);
    });

    function loginUser(mobl, pass) {
        var url = 'model/userLogin/login.php';
        $.ajax({
                url: url,
                data: {
                    mobl: mobl,
                    pass: pass
                },
                method: "POST"
            })
            .done(function (json) {
                var response = JSON.parse(json);
                if (response === 'Success') {
                    window.location = window.location.href;
                } else {
                    window.location = 'index.php';
                }
            })
            .fail(function (xhr, status, errorThrown) {
                console.log(xhr);
            });
    }
/* User Login  */
    
    
/* User Registration  */
    $("#signup").on("submit", function (event) {
        var user = $('#name').val();
        var mobile = $('#mobile').val();
        var email = $('#email').val();
        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();
        var address = $('#address').val();
        var passcheck = checkMatch(pass1, pass2);
        if (passcheck == true) {
            var pass = pass1;
            signup(user, mobile, email, pass, address);
        } else {
            showAlert();
        }
    });

    function signup(user, mobile, email, pass, address) {
        var url = 'model/userLogin/signup.php';
        $.ajax({
                url: url,
                data: {
                    user: user,
                    mobile: mobile,
                    email: email,
                    pass: pass,
                    address: address
                },
                method: "POST"
            })
            .done(function (json) {
                var response = JSON.parse(json);
                if (response === 'Success') {
                    window.location = window.location.self;
                } else {
                    window.location = window.location.href;
                }

            })
            .fail(function (xhr, status, errorThrown) {
                console.log(xhr);
            });
    }
    
    function showAlert() {
        $('#pass').show();
    }

    function checkMatch(pass1, pass2) {
        if (pass1 === pass2) {
            return true;
        } else {
            return false;
        }
    }
/* User Registration  */

    
/* User Signout */
    $("#signout").on("click", function (event) {
        var url = 'model/userLogin/signout.php';
        $.ajax({
                url: url,
                method: "POST"
            })
            .done(function (json) {
                var response = JSON.parse(json);
                if (response === 'Success') {
                    sessionStorage.clear();
                    window.location = window.location.href;
                } else {
                    window.location = window.location.href;
                }
            })
            .fail(function (xhr, status, errorThrown) {
                console.log(xhr);
            });
    });   
/* User Signout */
    
    
/* Validations */
    $('#txtPhone').blur(function(e) {
       if (validatePhone('txtPhone')) {
           $('#spnPhoneStatus').html('Valid');
           $('#spnPhoneStatus').css('color', 'green');
       }
       else {
          $('#spnPhoneStatus').html('Invalid');
          $('#spnPhoneStatus').css('color', 'red');
       }
    });

    function validatePhone(txtPhone) {
        var a = document.getElementById(txtPhone).value;
        var filter = /^[0-9-+]+$/;
        if (filter.test(a)) {
            return true;
        }
        else {
            return false;
        }
    }
/* Validations */
    
});

