<?php if(isset($_SESSION)) {
        header('Location: register.php');
    } ?>

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
                                        <input name="userId" type="hidden" value="<?php if(isset($_SESSION['USERID'])) { echo $_SESSION['USERID'];} ?>">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="name">Name</label>
                                                <input id="name" name="name" type="text" placeholder="User Name" class="form-control input-md" value="<?php if(isset($_SESSION['USERNM'])) { echo $_SESSION['USERNM'];} ?>" required readonly>
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
                                                <label class="control-label" for="serviceAt">Service At</label>
                                                <select id="serviceAt" name="serviceAt" class="form-control">
                                                    <option value="1">Parlour Service</option>
                                                    <option value="0">Home Service</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Select Basic -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label" for="serviceClass">Appointment For</label>
                                                <select id="serviceClass" name="serviceClass" class="form-control" onchange="loadServices(this.value)">
                                                    <option value="">Select a Class :</option>
                                                    <option value="Basicfacial">BASICFACIAL</option>
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
                                                    <!--<option class = "serviceOptions" value="Basic cleanup">
                                                        Basic cleanup
                                                    </option>
                                                    <option class = "serviceOptions" value="Fruit Secret Facial">
                                                        Fruit Secret Facial
                                                    </option>
                                                    <option class = "serviceOptions" value="Spirulona Facial">
                                                        Spirulona Facial
                                                    </option>-->
                                                    
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
                                                <button href="gorg.php" id="makeApp" name="makeApp" data-toggle="modal" data-target="#squarespaceModal" class="makeapp" onclick="bookTheSlot()">Make An Appointment</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- form end -->


                                    <!-- line modal -->
                                    <!--<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                    <h3 class="modal-title" id="lineModalLabel">My Modal</h3>
                                                </div>
                                                <div class="modal-body">

                                                     content goes here 
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">File input</label>
                                                            <input type="file" id="exampleInputFile">
                                                            <p class="help-block">Example block-level help text here.</p>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                  <input type="checkbox"> Check me out
                                                </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
                                                        </div>
                                                        <div class="btn-group btn-delete hidden" role="group">
                                                            <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal" role="button">Delete</button>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
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

                    function convertNum(num) {
                        return num < 10 ? '0' + num : num;
                    }

                    function restrictDates() {

                        var today = new Date();

                        var dd = today.getDate();
                        var mm = today.getMonth() + 1; //January is 0!
                        var yyyy = today.getFullYear();

                        var ddd = dd + 6;
                        var today = yyyy + '-' + convertNum(mm) + '-' + convertNum(dd);
                        var tdays = yyyy + '-' + convertNum(mm) + '-' + convertNum(ddd);
                        $("#date").attr("min", today);
                        $("#date").attr("max", tdays);

                    }

                    function loadServices(val) {

                        var select = "#serviceName";
                        $('.serviceOptions').remove();
                        $.each(Products[val], function(index, value) {
                            $(select).append('<option class = "serviceOptions" value="' + value + '">' + value + "</option>");
                        });
                        //$("#serviceClass").attr("disabled", true);
                    }

                    function loadTimes(val) {
                        var select = "#time";
                        $('.timeOptions').remove();
                        $.each(val, function(index, value) {
                            $(select).append('<option class = "timeOptions" value="' + index + '">' + value + "</option>");
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
                        insertAppAPI();
                        //modalCheck();
                    }

                    /*  function modalCheck() {
                          alert("Hi");
                          $('a[data-target=#myModal]').on('click', function (ev) {
                              ev.preventDefault();
                              if (filters.length <= 0) {
                                  alert('Please select any one item in grid');
                              }
                              else {
                                  $(this).attr('href', '/GeoRegion/Edit/' + filters[0]);
                                  var target = $(this).attr("href");

                                  // load the url and show modal on success
                                  $("#myModal").load(target, function () {
                                      $("#myModal").modal("show");
                                  });
                              }
                          });
                      }*/

                    function insertAppAPI() {
                        var url = 'model/gorgeousParlour/Appointment.php';
                        //var appForm = $("#appForm").serializeArray();
                        var formData = {};
                        $.each($('#appForm').serializeArray(), function() {
                            formData[this.name] = this.value;
                        });
                        //alert('name1 = ' + result.name1 + ', name2 = ' + result.name2);
                        $.ajax({
                                url: url,
                                data: {
                                    serverAPI: 'bookNew',
                                    Data: formData
                                },
                                method: "POST"
                            })
                            .done(function(data) {
                                var response = JSON.parse(data);
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
