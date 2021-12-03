<?php 
    session_start();

?>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus php5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="index.php">Home</a></li>
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.php">Left Sidebar</a></li>
                        <li class="active"><a href="sidebar-right.php">Right Sidebar</a></li>
                    </ul>
                </li> -->
                <li><a href="contact.php">Contact</a></li>
                <li><a href="toucantoco.php">Défi : Toucan Toco</a></li>
                
                <?php 

	                if(!isset($_SESSION['id']) || empty($_SESSION['id']) ){

                        echo '<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>';
                    } else {
                        
                       
                        echo "<li><a href=\"accueil.php\">Défi : 2Authentification - Profil</a></li>";
                        echo "<li><a href=\"formSauvetage.php\">Inscrire un sauvetage</a></li>";
                        echo '<li><a class="btn" href="scripts/deconnexion.php">Deconnexion</a></li>';
                    }

                ?>
                
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div> 