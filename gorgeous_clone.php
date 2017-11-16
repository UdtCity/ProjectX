<?php include 'common/commonHead.php'; ?>
<link href="assets/css/appointment.css" rel='stylesheet' type='text/css' />

<body>
    <?php require_once 'model/appConnection.php';?>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
                <?php include 'common/commonHeader.php'; ?>
                <!--content-->
                <div class="content">
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
                    <div class="women_main">
                        <script src="assets/js/gorgeous/productList.js"></script>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well-block">
                                    <div class="well-title">
                                        <h2>Book an Appointment</h2>
                                    </div>
                                    <form id="appForm" name="appForm" action="#">
                                        <!-- Form start -->
                                        <input name="userid" type="hidden" value="<?php if(isset($_SESSION['USERID'])) { echo $_SESSION['USERID'];} ?>">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Name</label>
                                                <input id="name" name="name" type="text" placeholder="User Name" class="form-control input-md" value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USERNM'];} ?>"required readonly>
                                            </div>
                                        </div>
                                        <!-- Form MOBILE -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="name">MobileNo</label>
                                                <input id="mobile" name="mobile" type="text" placeholder="10 Digit Mobile Number" maxlength="10" value="<?php if(isset($_SESSION['USERMB'])) { echo $_SESSION['USERMB'];} ?>" class="form-control input-md" required readonly>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="email">Email</label>
                                                <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" value="<?php if(isset($_SESSION['USEREM'])) { echo $_SESSION['USEREM'];} ?>" required readonly>
                                            </div>  
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label" for="Address">ADDRESS</label>
                                                <input id="Address" name="Address" type="text" placeholder="Address" class="form-control input-md" value="<?php if(isset($_SESSION['USERAD'])) { echo $_SESSION['USERAD'];} ?>" required readonly>
                                            </div>
                                        </div>
                                        <!-- Select type service -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="service_at">Service At</label>
                                                <select id="service_at" name="service_at" class="form-control">
                                                    <option value="parlour">Parlour Service</option>
                                                    <option value="home">Home Service</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="serviceClass">Appointment For</label>
                                                <select id="serviceClass" name="serviceClass" class="form-control" onchange="loadServices(this.value)">
                                                    <option value="Basicfacial">FACIAL</option>
                                                    <option value="Ultimatefacial">ULTIMATE FACIAL</option>
                                                    <option value="Specialmask">SPECIAL MASK</option>
                                                    <option value="Detanandbleach">DETAN AND BLEACH</option>
                                                    <option value="Detan">DETAN  </option>
                                                    <option value="Specialtreatments">SPECIAL TREATMENTS</option>
                                                    <option value="Hairtreatments">HAIR TREATMENTS  </option>
                                                    <option value="Head massage">HEAD MASSAGE  </option>
                                                    <option value="Hairspalorel">HAIR SPAAND LOREAL     </option>
                                                    <option value="Henna">HENNA   </option>
                                                    <option value="Haircolouring">HAIR COLOURING   </option>
                                                    <option value="Hairstraightening">HAIR STRAIGHTENING </option>
                                                    <option value="Waxing">WAXING  </option>
                                                    <option value="Flavouredwaxing">FLAVOURED WAXING  </option>
                                                    <option value="Specialwaxing">SPECIAL WAXING    </option>
                                                    <option value="Spa">FOOT SPA  </option>
                                                    <option value="Nailing">NAILING</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Select product -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="serviceName">Specify Service</label>
                                                <select id="serviceName" name="serviceName" class="form-control">
                                                    <option class = "serviceOptions" value="Basic cleanup">
                                                        Basic cleanup
                                                    </option>
                                                    <option class = "serviceOptions" value="Fruit Secret Facial">
                                                        Fruit Secret Facial
                                                    </option>
                                                    <option class = "serviceOptions" value="Spirulona Facial">
                                                        Spirulona Facial
                                                    </option>
                                                    <!--==========   Reserved here for loading services   ===============-->
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="date">Preferred Date</label>
                                                <input id="date" name="date" value="" type="date" placeholder="Preferred Date" class="form-control input-md" onchange="fetchTimings(this.value)" required>
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="time">Available Time</label>
                                                <select id="time" name="time" class="form-control">
                                                    <option class="timeOptions" value="">Please select date first</option>
                                                </select>
                                            </div>
                                        </div> 

                                        <!-- Button -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button id="makeApp" name="makeApp"  class="makeapp" onclick="bookTheSlot()">Make An Appointment</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- form end -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    

                    /*restrictDates*/
                    $(document).ready(function() {
                        restrictDates();
                    });

                    function restrictDates() {
                        var today = new Date();
                        var dd = today.getDate();
                        var mm = today.getMonth() + 1; //January is 0!
                        var yyyy = today.getFullYear();
                        if (dd < 10) {
                            dd = '0' + dd;
                        }
                        if (mm < 10) {
                            mm = '0' + mm;
                        }
                        var ddd = dd + 6;
                        var today = yyyy + '-' + mm + '-' + dd;
                        var tdays = yyyy + '-' + mm + '-' + ddd;
                        $("#date").attr("min", today);
                        $("#date").attr("max", tdays);
                    }

                    function loadServices(val) {
                        var select = "#serviceName";
                        $('.serviceOptions').remove();
                        $.each(Products[val], function(index, value) {
                            $(select).append('<option class = "serviceOptions" value="' + value + '">' + value + "</option>'");
                        });
                    }

                    function loadTimes(val) {
                        var select = "#time";
                        $('.timeOptions').remove();
                        $.each(val, function(index, value) {
                            $(select).append('<option class = "timeOptions" value="' + index + '">' + value + "</option>'");
                        });
                    }

                    function fetchTimings(date) {
                        var url = 'model/gorgeousParlour/Appointment.php';
                        var className = $("#serviceClass").val();
                        var classType = Session_Type[className];
                        $.ajax({
                                url: url,
                                data: {
                                    serverAPI: 'getTimeList',
                                    dateTime: date,
                                    sessionType: classType // HardCoded - Session Type 
                                },
                                method: "POST"
                            })
                            .done(function(json) {
                                var response = JSON.parse(json);
                                if (response == null) {
                                    // Display No Slot Available Book
                                } else {
                                    loadTimes(response);
                                }

                            })
                            .fail(function(xhr, status, errorThrown) {
                                console.log(xhr);
                            });
                    }

                    function bookTheSlot() {
                        var url = 'model/gorgeousParlour/Appointment.php';
                        var appForm = $("#appForm").serializeArray();
                        $.ajax({
                                url: url,
                                data: {
                                    serverAPI: 'bookNew',
                                    Data: appForm
                                },
                                method: "POST"
                            })
                            .done(function(json) {
                                var response = JSON.parse(json);
                                if (response == null) {
                                    console.log(response);
                                } else {
                                    console.log(response);
                                }

                            })
                            .fail(function(xhr, status, errorThrown) {
                                console.log(xhr);
                            });
                    }

                </script>

                <?php include 'common/commonFooter.php'; ?>
                
            </div>
        </div>
    </div>

</body>

</html>
