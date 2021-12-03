<?php
    session_start();
    include("scripts/2authActive.php");

    if(!isset($_SESSION['id']) || empty($_SESSION['id']) ){

        header('Location: index.php');
        exit();
    } else {
		$estActive = auth2EstActive($_SESSION['id']);

		if ($estActive == 1) {
			if (!isset($_SESSION['double_auth']) || empty($_SESSION['double_auth'])){
				header('Location: index.php');
				exit();
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sauveteur - Ajouter des informations</title>

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
			<li><a href="index.php">Accueil</a></li>
			<li class="active">Formulaire</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Proposer un sauvetage !</h1>
				</header>
				<div class="panel panel-default">
					<div class="panel-body">
						
			
						<form method="POST" action=''>
							<h3 class="thin text-center">Bateau</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Nom</label>
										<input type="text" class="form-control" name="nomBateau">
									</div>

								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Longueur</label>
										<input type="text" class="form-control" name="longueurBateau">
									</div>
								
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Longueur</label>
										<input type="text" class="form-control" name="longueurBateau">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Largeur</label>
										<input type="text" class="form-control" name="largeurBateau">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Fret</label>
										<input type="text" class="form-control" name="fretBateau">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Type</label>
										<select name="typeBateau" class="custom-select custom-select-lg" id="type-bateau">
											<option value="">--N/R--</option>
											<option value="panne">Panne</option>
											<option value="medical">Médical</option>
											<option value="intemperie">Intempérie</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Vitesse</label>
										<input type="text" class="form-control" name="vitesseBateau">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Description</label>
										<input type="text" class="form-control" name="descriptionBateau">
									</div>
								</div>
							</div>


							<h3 class="thin text-center">Sauveteur</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Nom</label>
										<input type="text" class="form-control" name="nomSauveteur">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Prenom</label>
										<input type="text" class="form-control" name="prenomSauveteur">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Date de naissance</label>
										<input type="date" class="form-control" name="naissanceSauveteur">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Date de deces</label>
										<input type="date" class="form-control" name="decesSauveteur">
									</div>
								</div>
							</div>


							<h3 class="thin text-center">Sauvé</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Nom</label>
										<input type="text" class="form-control" name="nomSauve">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Prenom</label>
										<input type="text" class="form-control" name="prenomSauve">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Date de naissance</label>
										<input type="date" class="form-control" name="naissanceSauve">
									</div>
								</div>
							</div>

							<h3 class="thin text-center">Lieu</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Longitude</label>
										<input type="text" class="form-control" name="longitudeLieu">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Latitude</label>
										<input type="text" class="form-control" name="latitudeLieu">
									</div>
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Description</label>
										<input type="text" class="form-control" name="descriptionLieu">
									</div>
								</div>
							</div>


							<h3 class="thin text-center">Sauvetage</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="top-margin">
										<label>Description</label>
										<input type="textarea" class="form-control" name="descriptionSauvetage">
									</div>
								</div>
								<div class="col-md-6">
									<div class="top-margin">
										<label>Durée</label>
										<input type="text" class="form-control" name="dureeSauvetage">
									</div>
								</div>
							</div>


							<div class="row top-space">
								<div class="col text-center">
									<button class="btn btn-action" type="submit" name="addSauvetageUser" onclick="popup()">Proposer le sauvetage !</button>
								</div>
							</div>


						</form>
					</div>
				</div>


			</article>
			<!-- /Article -->
			
		</div>
	</div>	<!-- /container -->
	
	<!-- Footer -->
	<?php
		include("footer.php");
	?>
		

<script>
function popup() {
  alert("Votre demande d'ajout de sauvetage est en attente d'aprobation par l'administrateur !");
}
</script>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>
