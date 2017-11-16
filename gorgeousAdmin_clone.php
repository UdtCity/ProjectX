<?php
    ini_set('display_errors', 0);
?>

    <?php include 'common/commonHead.php'; ?>

    <body>

        <div class="page-container">
            <div class="left-content">
                <div class="inner-content">

                    <div class="content">
                        <div class="women_main">
                            <div class="tab-main">
                                <div class="tab-inner">
                                    <div id="tabs" class="tabs">
                                        <div class="graph">
                                            <nav>
                                                <ul>
                                                    <li class="tab-current">
                                                        <a href="#section-1" class="icon-shop" title="today">
                                                            <span id="date1"></span><br>
                                                            <span id="day1"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-2" class="icon-cup" title="tommorrow">
                                                            <span id="date2" onclick="bookTheSlot()"></span><br>
                                                            <span id="day2" ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-3" class="icon-food" title="day after tommorrow">
                                                            <span id="date3"></span><br>
                                                            <span id="day3"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-4" class="icon-lab" title="STARTER">
                                                            <span id="date4"></span><br>
                                                            <span id="day4"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-5" class="icon-truck" title="CURRIES">
                                                            <span id="date5"></span><br>
                                                            <span id="day5"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-6" class="icon-food" title="BREADS">
                                                            <span id="date6"></span><br>
                                                            <span id="day6"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#section-7" class="icon-food" title="BRIYANI">
                                                            <span id="date7"></span><br>
                                                            <span id="day7"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="content tab">
                                                <section id="section-1" class="content-current">
                                                    <div class="sticky">
                                                        <h1>Welcome to Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </section>
                                                <section id="section-2" class="content">

                                                    <div class="sticky">
                                                        <h1>lcome to Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                </section>
                                                <section id="section-3" class="content">

                                                    <div class="sticky">
                                                        <h1>Welcome Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                </section>
                                                <section id="section-4" class="content">

                                                    <div class="sticky">
                                                        <h1>Welcomet Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                </section>
                                                <section id="section-5" class="content">

                                                    <div class="sticky">
                                                        <h1>Welcome to Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>


                                                    <div class="clearfix"></div>
                                                </section>

                                                <section id="section-6" class="content">


                                                    <div class="sticky">
                                                        <h1>Welcome to Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </section>
                                                <section id="section-7" class="content">


                                                    <div class="sticky">
                                                        <h1>Welcome to Insight Reports!</h1>
                                                        <p><small>Data reports are updated monthly.</small></p>
                                                        <p>This community is currently in the process of being included, so please check back soon.</p>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/cbpFWTabs.js"></script>
        <script>
            new CBPFWTabs(document.getElementById('tabs'));

        </script>
        <script>
            
            $(document).ready(function() {
                var date = new Date();
                var mm   = date.getMonth() + 1;
                var yy   = date.getFullYear();
                var dd1  = date.getDate();
                var dd2  = dd1 + 1;
                var dd3  = dd1 + 2;
                var dd4  = dd1 + 3;
                var dd5  = dd1 + 4;
                var dd6  = dd1 + 5;
                var dd7  = dd1 + 6;
                
                var date1 = yy+'-'+mm+'-'+dd1;
                var date2 = yy+'-'+mm+'-'+dd2;
                var date3 = yy+'-'+mm+'-'+dd3;
                var date4 = yy+'-'+mm+'-'+dd4;
                var date5 = yy+'-'+mm+'-'+dd5;
                var date6 = yy+'-'+mm+'-'+dd6;
                var date7 = yy+'-'+mm+'-'+dd7;
                
                $("#date1").text(date1);
                $("#date2").text(date2);
                $("#date3").text(date3);
                $("#date4").text(date4);
                $("#date5").text(date5);
                $("#date6").text(date6);
                $("#date7").text(date7);
                
                var weekday = new Array(7);
                weekday[0] =  "Sunday";
                weekday[1] = "Monday";
                weekday[2] = "Tuesday";
                weekday[3] = "Wednesday";
                weekday[4] = "Thursday";
                weekday[5] = "Friday";
                weekday[6] = "Saturday";
                
                var day1 = weekday[date.getDay()];
                var day2 = weekday[date.getDay()+1]; 
                var day3 = weekday[date.getDay()+2]; 
                var day4 = weekday[date.getDay()+3]; 
                var day5 = weekday[date.getDay()+4]; 
                var day6 = weekday[date.getDay()+5]; 
                var day7 = weekday[date.getDay()+6];
                
                $("#day1").text(day1);
                $("#day2").text(day2);
                $("#day3").text(day3);
                $("#day4").text(day4);
                $("#day5").text(day5);
                $("#day6").text(day6);
                $("#day7").text(day7);
            });
            
            function bookTheSlot() {
                var url = 'model/gorgeousParlour/Appointment.php';
                var dT = $(this).val();
                alert(dT);
                /*$.ajax({
                        url: url,
                        data: {
                            serverAPI: 'getAllApp',
                            dateTime: dT
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
                    });*/
            }

        </script>
    </body>

    </html>
