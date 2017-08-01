<!DOCTYPE html>
<html lang="en">
<head>
	<title>Moonshine Co | Vape Industry</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!-- <meta name="viewport" content="width=device-width" /> -->

	<!-- Bootstrap core CSS     -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style_one.css" rel="stylesheet">

	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<!--  Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

</head>
<body>
	<div id="loads">
		<object>
			<embed class="logoc" 
			width="200px" height="200px" 
			src="assets/img/logo2.svg" />
		</object>
	</div>
	<div id="container" class="container">
		<div class="content">
			<div class="col-xs-12 col-md-12 col-lg-12 body">
				<div class="row">
					<div class="col-xs-4 col-sm-12 box-title" align="center">
						<div class="font-white" align="center">			
							<object class="logod" align="center">
								<embed align="center" class="logoc" src="assets/img/logo.svg"/ width="100%" height="100%"/>
								<br/>
								
							</object>				
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>

<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- DATATABLE -->
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<!-- BOOTSTRRAP -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- magic scroll -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<!-- ANIME JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<!-- END OF LIBRARIES -->

<script type="text/javascript">
	document.onreadystatechange = function () {
		var state = document.readyState
		if (state == 'interactive') {
			document.getElementById('container').style.visibility="hidden";
		} else if (state == 'complete') {
			setTimeout(function(){
				document.getElementById('interactive');
				document.getElementById('loads').style.visibility="hidden";
				document.getElementById('container').style.visibility="visible";
			},4000);
		}
	}
</script>

</html>