<?php

session_start();

include('configdb.php');

if(isset($_POST['connexion'])){
    $_SESSION['msg'] = "Veuillez remplir tous les champs";

    if(!empty($_POST['email']) && !empty($_POST['mdp'])){

        $requeteConnexion = $linkpdo->prepare('SELECT * FROM user
                                    WHERE email = :mail');


       
        $requeteConnexion->execute(array('mail'=>$_POST['email']));

        $countResultat = $requeteConnexion->rowCount();

        if($countResultat == 1) {

            $resultat = $requeteConnexion->fetch();

           if(password_verify($_POST['mdp'], $resultat['mdp'])){
               
                $_SESSION['msg'] = "";
                $_SESSION['id'] = $resultat['idUser'];

                header('Location: ../accueil.php');

                exit;

           } else {
                $_SESSION['msg'] = "Mot de passe invalide.";

           }


        } else {
            $_SESSION['msg'] = "Email/Mot de passe invalide.";
        }
    
    }
}

echo $_SESSION['msg'];

header('Location: ../signin.php');

exit;
