<?php include 'common/commonHead.php'; ?>
<style>
        .collapseBox {
            margin-left: 120px;
            width: 75%;
        }
        
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }

        .switch input {display:none;}

        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }

        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }

        input:checked + .slider {
          background-color: #2196F3;
        }

        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }

        .slider.round:before {
          border-radius: 50%;
        }
</style>
<body>
               <?php
    require_once 'model/appConnection.php';
    require_once 'model/kickGrassHotel/AdminBookingList.php';
?>
<div class="container">
  <h2>Booking Table</h2>
  <table class="table table-sm">
    <thead>
      <tr>
        <th>Book ID</th>
        <th>Name</th>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Booking Time</th>
        <th>Order Taken</th>
        <th>Dispatch</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($booking as $book) {  ?>
      <tr>
          <td><?php echo $book['BOOK_ID']?></td>
          <td><?php echo $book['CUSTOMER_NAME']?></td>
          <td><?php echo $book['PRODUCT_ID']?></td>
          <td><?php echo $book['PRODUCT_NAME']?></td>
          <td><?php echo $book['QUANTITY']?></td>
          <td><?php echo $book['BOOKED_TIME']?></td>
          <td><input id="<?php echo $book['BOOK_ID']?>oTk" class="orderTaken" type="checkbox" value="<?php echo $book['BOOK_ID']?>"/></td>
          <td><input id="<?php echo $book['BOOK_ID']?>oDp" class="orderDsptch" type="checkbox" value="<?php echo $book['BOOK_ID']?>"/></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>
    

    
<script src="assets/js/jquery.js"></script>
<script>
    /*$('input[class="orderTaken"]').click(function () {
        $(this).addClass('checked');
        var id = $(this).val();
        var url = 'model/kickGrassHotel/kickGrassAdmin.php';
            $.ajax({
                url: url,
                data: {
                    book_id: id
                },
                type: "POST"
            })
                .done(function(json) {
                var response = JSON.parse(json);
                if(response) {
                    window.location = 'kickgrassAdmin.php';    
                }
                else {
                    window.location = 'kickGrass.php';    
                }                
            })
                .fail(function(xhr, status, errorThrown) {
                console.log(xhr);
            });
        
    });*/
    
    $('input[class="orderDsptch"]').click(function () {
        //var preventCheck = $('input[class="orderTaken"]').hasClass('checked');
//        if(preventCheck) {
            /*var id = $(this).attr('id');*/
            var id = $(this).val();
//            var classCheck = $(this).hasClass('checked')
            var url = 'model/kickGrassHotel/AdminUpdateBookTime.php';
            $.ajax({
                url: url,
                data: {
                    book_id: id
                },
                type: "POST"
            })
                .done(function(json) {
                var response = JSON.parse(json);
                if(response) {
                    window.location = 'kickgrassAdmin.php';    
                }
                else {
                    window.location = 'kickGrass.php';    
                }                
            })
                .fail(function(xhr, status, errorThrown) {
                console.log(xhr);
            });
    });
</script>
    
    
<div class="container">
		<h2>Admin Dashboard </h2>
		<i class="more-less glyphicon glyphicon-plus"></i>
		<i class="more-less glyphicon glyphicon-minus"></i>
		<i class="more-less glyphicon glyphicon-pencil"></i>
        <i class="more-less glyphicon glyphicon-menu-up"></i>
        <i class="more-less glyphicon glyphicon-menu-down"></i>
<?php
    require_once 'model/kickGrassHotel/HotelDisplayItems.php'; 
?>        
		<div class="panel-group" id="accordion">
        <?php
          if(isset($getProducts)) { 
            foreach($getProducts as $item) { ?>
                <div class="panel panel-default collapseBox">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $item; ?>"><?php echo $item; ?></a>
                        </h4>
                    </div>

                    <div id="<?php echo $item; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="list-unstyled">
                  <?php foreach($class[$item] as $row) { ?>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <p><?php echo $row['PRODUCT_NAME']; ?>
                                                <?php if($row['AVAILABILITY'] == 1) { ?>
                                                        <label class="switch"><input type="checkbox" value="<?php echo $row['PRODUCT_ID']; ?>" class="checkBox checked">
                                                            <span class="slider round"></span>
                                                        </label>
                                                <?php  } else { ?>
                                                        <label class="switch"><input type="checkbox" value="<?php echo $row['PRODUCT_ID']; ?>" class="checkBox">
                                                            <span class="slider round"></span>
                                                        </label>          
                                                <?php } ?>
                                            </p> 
                                        </label>
                                    </div>
                                </li>
                  <?php } ?>
                            </ul>
                        </div>
                    </div>
			     </div>
            <?php } ?>		
        <?php } ?>        
        </div>
</div>
<!--<script>
    $('input[class="checkBox"]').click(function () {
        if($(this).hasClass('checked')) {
            $(this).removeClass('checked');
            checkAvail = 0;
        }
        else {
            $(this).addClass('checked');
            checkAvail =1;
        }
        var pid = $(this).val();
        var url = 'model/kickGrassHotel/kickGrassAdmin.php';
            $.ajax({
                url: url,
                data: {
                    product_id: pid,
                    status: checkAvail
                },
                type: "POST"
            })
                .done(function(response) {
                
                if(response) {
                    window.location = 'kickgrassAdmin.php';    
                }
                else {
                    window.location = 'kickGrass.php';    
                }                
            })
                .fail(function(xhr, status, errorThrown) {
                console.log(xhr);
            });
        
    });
</script>-->
<script src="assets/js/bootstrap.js"></script>
</body>
</html>