<?php
    session_start();
    require "model/accountModel.php";
    require "model/accounts.php";
    require "model/connexion.php";

    $accounts = getAccountByUser($db, $_SESSION["user"]["userID"]);

    if(isset($_GET["id"]) && isset($accounts[$_GET["id"]])){
        $account = $accounts[$_GET["id"]];
    }
    else{
        $error="Nous ne parvenons pas à récupérer votre compte, essayez de revenir plus tard ;(";
    }

 ?>


<?php include "view/singleAccountView.php"; ?>
