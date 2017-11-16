<?php include 'common/commonHead.php'; ?>

<body>
    <div class="page-container">
        <div class="left-content">
            <div class="inner-content">
                <div class="content">
                    <div class="monthly-grid">
                        <div class="panel panel-widget">
                            <h2>Booking Requests</h2>
                            <div class="row">
                                <table id="bookTable" class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Service Venue</th>
                                            <th>Service Name</th>
                                            <th>Service Time</th>
                                            <th>Accept</th>
                                            <th>Reject</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-2 dateTime">
            <div class="form-group">
                <label class="control-label" for="date">Select a Date</label>
                <input id="date" name="date" value="" type="date" placeholder="Preferred Date" class="form-control input-md" onchange="fetchData(this.value)" required>
            </div>
        </div>


        <div class="left-content">
            <div class="inner-content">
                <div class="content">
                    <div class="monthly-grid">
                        <div class="panel panel-widget">
                            <h2>Appointments</h2>

                            <div class="row ">
                                <table id="appTable" class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                            <th>Service Venue</th>
                                            <th>Service Name</th>
                                            <th>Service Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        $(document).ready(function() {
            fetchData(); // Get all Pending Appointments
            restrictDates(); // Restrict Admin from selecting previous dates  
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

        function fetchData(date = null) {
            var url = 'model/gorgeousParlour/Appointment.php';
            var dT = date;
            $.ajax({
                    url: url,
                    data: {
                        serverAPI: 'getAllApp',
                        dateTime: dT
                    },
                    method: "POST"
                })
                .done(function(data) {
                    var data = JSON.parse(data);
                    if (date != null) {
                        loadAppData(data);
                    } else {
                        loadBookData(data);
                    }


                })
                .fail(function(xhr, status, errorThrown) {
                    console.log(xhr);
                });
        }

        function loadBookData(data) {

            $.each(data, function(key, val) {
                var list = $('<tr class="bookTableRow"><td>' + val.USERNAME + '</td><td>' + val.ADDRESS + '</td><td>' + val.MOBILE_NO + '</td><td>' + val.SERVICE_AT + '</td><td>' + val.SERVICE_NAME + '</td><td>' + val.SERVICE_DATETIME + '</td><td><input type="checkbox" class="acceptBook" value="' + val.BOOK_ID + '" onclick="acceptApp(this.value,1)"/></td><td><input type="checkbox" class="rejectBook" value="' + val.BOOK_ID + '" onclick="rejectApp(this.value,0)"/></td></tr>');

                $('#bookTable tbody').append(list);
            })

        }

        function loadAppData(data) {
            //var ul = $('<ul>');
            $('.appTableRow').remove();
            $.each(data, function(key, val) {
                var list = $('<tr class="appTableRow"><td>' + val.USERNAME + '</td><td>' + val.ADDRESS + '</td><td>' + val.MOBILE_NO + '</td><td>' + val.SERVICE_AT + '</td><td>' + val.SERVICE_NAME + '</td><td>' + val.SERVICE_DATETIME + '</td></td></tr>');
                $('#appTable tbody').append(list);
            })

        }

        function acceptApp(bookid, status) {

            var url = 'model/gorgeousParlour/Appointment.php';

            $.ajax({
                    url: url,
                    data: {
                        serverAPI: 'acceptApp',
                        appid: bookid,
                        status: status
                    },
                    method: "POST"
                })
                .done(function(data) {
                    var data = JSON.parse(data);
                    if (data) {
                        window.location = 'gorgeousAdmin.php';
                    } else {
                        window.location = 'gorgeousAdmin.php';
                    }
                })
                .fail(function(xhr, status, errorThrown) {
                    console.log(xhr);
                });

        }

        function rejectApp(bookid, status) {

            var url = 'model/gorgeousParlour/Appointment.php';

            $.ajax({
                    url: url,
                    data: {
                        serverAPI: 'rejectApp',
                        appid: bookid,
                        status: status
                    },
                    method: "POST"
                })
                .done(function(data) {
                    var data = JSON.parse(data);
                    if (data) {
                        window.location = 'gorgeousAdmin.php';
                    } else {
                        window.location = 'gorgeousAdmin.php';
                    }
                })
                .fail(function(xhr, status, errorThrown) {
                    console.log(xhr);
                });

        }

    </script>

</body>
