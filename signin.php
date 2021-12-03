<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign in - Sauveteur</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

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
			<li class="active">Authentification</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Connexion</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez-vous à votre compte</h3>
							<p class="text-center text-muted">Vous n'êtes pas inscrit ? Vous pouvez vous inscrire ici : <a href="signup.php">Inscription</a>. Cela vous offrira la possibilité de proposer des données de sauvetages pour alimenter le site après validation par l'administrateur. </p>
							<hr>
							<?php 
								
								if(!empty($_SESSION['msg'])){

									echo "<p class=\"text-center text-muted\">".$_SESSION['msg']."</p>";
									
								}
							?>
							
							<form method="POST" action='scripts/connexion.php'>
								<div class="top-margin">
									<label>Email<span class="text-danger">*</span></label>
									<input type="email" class="form-control" name="email" required>
								</div>
								<div class="top-margin">
									<label>Mot de passe<span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="mdp" minlength="8" required>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-7">
										<b><a href="">Mot de passe oublié ?</a></b>
									</div>
									<div class="col-lg-5 text-right">
										<button class="btn btn-action" type="submit" name="connexion">Se connecter</button>
									</div>
								</div>
							</form>


						</div>
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
		
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>