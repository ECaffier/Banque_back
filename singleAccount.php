<?php
    require "model/accountModel.php";
    require "model/db.php";
    require "model/entity/account.php";
    require "model/entity/user.php";
    session_start();

    $singleAccount = new accountModel();

    if(isset($_GET["id"])){
        // $account = getOneAccountByUser($db, $_SESSION["user"]["userID"], $_GET["id"]);
        $singleAccounts = $singleAccount->getOneAccountByUser($_SESSION["user"]->getUserID(), $_GET["id"]);
    }
    else{
        $error="Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard ;(";
    }

 ?>


<?php include "view/singleAccountView.php"; ?>