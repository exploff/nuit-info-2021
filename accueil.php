<?php
    session_start();
    include("scripts/2authActive.php");

    if(!isset($_SESSION['id']) || empty($_SESSION['id']) ){

        header('Location: index.php');
        exit();
    } 

    include('scripts/configdb.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Accueil - Sauveteur</title>

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
			<li class="active">Accueil</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col maincontent">
				<header class="page-header">
					<h1 class="page-title">Profil - Accueil</h1>
				</header>

               <p>Attention la double authentification est nécessaire pour inscrire un sauvetage :) </p>
				
				<p>
                    <?php
                        

                        $estActive = auth2EstActive($_SESSION['id']);

                        if ($estActive == 0) {
                            echo "<a href=\"scripts/activer2Auth.php?active=True\">Activer l'authentification à 2 facteurs</a>";
                            
                            echo "<br/><a href=\"accueil.php\">Continuer</a>";
                        } elseif(isset($_SESSION['double_auth'])) {

                            echo "<br/><a href=\"accueil.php\">Vous êtes déjà doublement connecté !</a>";

                        
                        
                        }else {
                            $qrcode = totp();
                            echo "<img src=".$qrcode." alt=\"\"/><br/>";


                        ?>
                        <?php 
                            if (isset($_SESSION['msg'])){
                                echo "<span class=\"text-danger\">".$_SESSION['msg']."</span>";
                            }

                        ?>
                        <form method="POST" action="">
                            <div class="row">
								<div class="col">
									<div class="top-margin">
										<label>Code</label>
										<input type="text" class="form-control" name="code">
									</div>

								</div>
							</div>
                            <div class="row top-space">
                                <div class="col text-center">
                                    <button class="btn btn-action" type="submit" name="envoyer">Envoyer !</button>
                                </div>
                            </div>
                        </form>
                        <?php
                            echo "<a href=\"scripts/activer2Auth.php?active=False\">Désactiver l'authentification à 2 facteurs</a>";

                        }
                       
                    ?>
                </p>
				<br>
					
                    <div class="row">
                       
                    </div>
                    <br>
                    <div class="row">
                        
                    </div>
                    <br>
                    <div class="row">
                       
                    </div>
					

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