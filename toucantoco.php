<?php
    include('scripts/configdb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>ToucanToco visualisateur données</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<?php
		include("navbar.php");
	?>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">ToucanToco</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col maincontent">
				<header class="page-header">
					<h1 class="page-title">ToucanToco - Data storing telling</h1>
				</header>
				
				<p>
				</p>
				<br>
				
                <a href="#geo1">Géolocalisation des sauvetages par type d'incident et durée au cours des années
                </a><br/>
                <a href="#geo2">Sauvetages par types</a>
                <a href=""></a>
                <a href=""></a>

				<iframe id="geo1" style="border: 0; overflow: hidden; height: 800px;" frameBorder="0" height="100%" width="100%" src="https://nuit-info-2021.toucantoco.com/embed.html?id=c10cb795-47eb-43a6-b72e-c154a5e4c763&title=true&stage=staging"></iframe>
					
				<iframe id="geo2" style="border: 0; overflow: hidden; height: 500px;" frameBorder="0" height="100%" width="100%" src="https://nuit-info-2021.toucantoco.com/embed.html?id=79c47dc3-a9e6-49ef-9efe-1dfb6048886f&title=true&stage=staging"></iframe>

			</article>

		</div>
	</div>	<!-- /container -->
	
	
	<!-- Footer -->
	<?php
		include("footer.php");
	?>
		
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>