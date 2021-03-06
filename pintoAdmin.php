<?php

    ini_set('display_errors', 0);

?>

<?php include 'common/commonHead.php'; ?>
<body>
<?php
    require_once 'model/appConnection.php';
    require_once 'model/pintoDelivery/PintoDeliveryList.php';
?>
<div class="page-container">
        <div class="left-content">
            <div class="inner-content">
    <div class="content">
    <div class="monthly-grid">
						<div class="panel panel-widget">
  <h2>Delivery Table</h2>
  <table class="table table-sm">
    <thead>
      <tr>
        <th>Delivery ID</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Class</th>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Dispatch Time</th>
        <th>Delivered</th>
      </tr>
    </thead>
    <tbody>
<?php foreach ($delivery as $del) {  ?>
      <tr>
          <td><?php echo $del['DEL_ID']?></td>
          <td><?php echo $del['CUSTOMER_NAME']?></td>
          <td><?php echo $del['MOBILE_NO']?></td>
          <td><?php echo $del['ADDRESS']?></td>          
          <td><?php echo $del['CLASS']?></td>
          <td><?php echo $del['PRODUCT_ID']?></td>
          <td><?php echo $del['PRODUCT_NAME']?></td>
          <td><?php echo $del['QUANTITY']?></td>
          <td><?php echo $del['DISPATCH_TIME']?></td>
          <td><input class="checkType" type="checkbox" value="<?php echo $del['DEL_ID']?>"/></td>
      </tr>
<?php } ?>
    </tbody>
  </table>
</div>
        </div></div></div> <?php include 'common/adminnav.php'; ?> 
                  </div></div>
    
<script src="assets/js/jquery.js"></script>
<script>
    $('input[class="checkType"]').click(function () {
        var id  = $(this).val();
        var url = 'model/pintoDelivery/PintoUpdateDeliTime.php';
            $.ajax({
                url: url,
                data: {
                    del_id: id
                },
                type: "POST"
            })
                .done(function(json) {
                var response = JSON.parse(json);
                if(response) {
                    window.location = 'pintoAdmin.php';    
                }
                else {
                    window.location = 'pintoAdmin.php';    
                }                
            })
                .fail(function(xhr, status, errorThrown) {
                console.log(xhr);
            });
    });
</script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>