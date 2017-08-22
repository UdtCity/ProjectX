<!--<link href="assets/dist/basic.css" rel="stylesheet">
<link href="assets/dist/dropzone.css" rel="stylesheet">

<form action="assets/uploads" class="dropzone" id="my-awesome-dropzone">
</form>

<script src="assets/dist/dropzone-amd-module.js"></script>
<script src="assets/dist/dropzone.js"></script>
<script src="assets/js/dropzone.js"></script>-->
<link href="assets/css/bootstrap.css" rel="stylesheet">


<form id="my-form">
    <input class="form-control" name="search" type="text" placeholder="type something ..." id="my-autoc">
        <br>
</form>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/typeahead.js"></script>
<script>    
$('#my-autoc').typeahead({
    name: 'search',
    remote: {
      url: 'model/kickGrassHotel/kickgrassAdmin.php?query=%QUERY',
      cache: false,
      filter: function(parsedResponse){
          return (parsedResponse.length > 1) ? parsedResponse[1] : [] ;
      }
    }
  }).on('typeahead:selected', function(e){
    e.target.form.submit();
  });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title>KickGrass Admin Dashboard</title>
    <meta charset="utf-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
        h1 {
            font-size: 20px;
            color: #111;
        }

        .content {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .tt-hint,
        .city {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 400px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
        }
    </style>
</head>

<body>
 
    <div class="content">

        <form>
            <h1>Try it yourself</h1>
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter City or ZIP code">
        </form>
    </div>
</body>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>
<script>
        $(document).ready(function() {

            $('input.city').typeahead({
                name: 'city',
                remote: 'model/kickGrassHotel/kickgrassAdmin.php?query=%QUERY'

            });

        })
</script>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title>KickGrass Admin Dashboard</title>
    <meta charset="utf-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!--<style>
        h1 {
            font-size: 20px;
            color: #111;
        }

        .content {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .tt-hint,
        .city {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 400px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
        }
    </style>-->
    <style>
	* {
		.border-radius(0) !important;
	}
	
	#field {
		padding-left: 20px;
		display: inline;
		margin-bottom: 20px;
	}
</style>
</head>

<body>

<!--<div class="container">
	<div class="row">
		<input type="hidden" name="count" value="1" />
		<div class="control-group" id="fields">
			<label class="control-label" for="field1">Assign Today Offers :</label>
			<div class="controls" id="profs">
				<form class="input-append">
					<div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8" /><button id="b1" class="btn add-more" type="button">+</button></div>
				</form>
			</div>
		</div>
	</div>
</div>-->
    <form>
            <h1>Try it yourself</h1>
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter City or ZIP code">
    </form>
<script>
	/*$(document).ready(function() {
		var next = 1;
		$(".add-more").click(function(e) {
			e.preventDefault();
			var addto = "#field" + next;
			var addRemove = "#field" + (next);
			next = next + 1;
			var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
			var newInput = $(newIn);
			var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
			var removeButton = $(removeBtn);
			$(addto).after(newInput);
			$(addRemove).after(removeButton);
			$("#field" + next).attr('data-source', $(addto).attr('data-source'));
			$("#count").val(next);

			$('.remove-me').click(function(e) {
				e.preventDefault();
				var fieldNum = this.id.charAt(this.id.length - 1);
				var fieldID = "#field" + fieldNum;
				$(this).remove();
				$(fieldID).remove();
			});
		});
	});*/
</script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>

<script>
    $(document).ready(function() {
        $('input.city').typeahead({
                name: 'city',
                remote: 'model/kickGrassHotel/kickgrassAdmin.php?query=%QUERY'
        });
    });
</script>
</body>
</html>