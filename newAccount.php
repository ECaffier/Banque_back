<?php

if(!isset($_SESSION["user"])): 
    header("Location:login.php");
endif; 

session_start();

    require "model/createNewAccountModel.php";
    require "model/connexion.php";


    if(!empty($_POST)) {
        if (!addAccount($db, $_POST)) {
            echo "L'enregistrement a échoué";
        }
    }


require "view/newAccountView.php";
