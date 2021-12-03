<?php

session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

include('configdb.php');

if(isset($_POST['inscription'])){
    $_SESSION['msg'] = 'erreur post empty attribute';

    if(!empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdp_confirm']) && !empty($_POST['nom']) && !empty($_POST['prenom'])){

        if ($_POST['mdp'] != $_POST['mdp_confirm']) {
            $_SESSION['msg'] = "Vos mots de passes ne correspondent pas.";

        } else {
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            $requeteConnexion = $linkpdo->prepare("INSERT INTO user(email, mdp, nom, prenom) VALUES(:email, :mdp, :nom, :prenom)");
    
            $requeteConnexion->execute(array('email'=>$_POST['email'],
                                            'mdp'=>$mdp,
                                            'nom'=>$_POST['nom'],
                                            'prenom'=>$_POST['prenom']));
    

            $_SESSION['msg'] = "Veuillez vous connecter !";

            header('Location: ../signin.php');

            exit;
        }
        

    
    } else {
        $_SESSION['msg'] = "Veuillez remplir tous les champs";

    }

}

echo $_SESSION['msg'];

// header('Location: ../signup.php');

// exit;