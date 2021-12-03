<?php

    session_start();

    if(!isset($_SESSION['id']) || empty($_SESSION['id']) ){

        header('Location: ../index.php');
        exit();
    } 


    include("configdb.php");

    if($_GET['active'] == "False") {
        
        //Desactiver la double auth

        $reqDesactiveDoubleAuth = $linkpdo->prepare('UPDATE user SET auth2 = 0 WHERE idUser = :id');

        $reqDesactiveDoubleAuth->execute(array('id'=>$_SESSION['id']));


        header('Location: ../accueil.php');
        exit();

    }else {

        //Activer la double auth
        $reqActiveDoubleAuth = $linkpdo->prepare('UPDATE user SET auth2 = 1 WHERE idUser = :id');

        $reqActiveDoubleAuth->execute(array('id'=>$_SESSION['id']));

        echo "On est la ";

        header('Location: ../accueil.php');
        exit();

    }

   
?>