<?php
require "model/accountModel.php";
require "model/operationModel.php";
require "model/db.php";
require "model/entity/user.php";
require "model/entity/account.php";
require "model/entity/operation.php";



session_start();

if(!isset($_SESSION["user"])): 
    header("Location:login.php");
endif; 
// Ajoute dans la table operation une ligne, ensuite ajoute au solde du compte le montant.
if(!empty($_POST)) {
    $deposit = new Operation($_POST);

    $depositModel = new OperationModel();

    $depositModel->deposit($deposit);

    $edit = new accountModel();

    $edits = $edit->getOneAccountByUser($_SESSION["user"]->getUserID(), $_GET["id"]);

    $account = $_GET["id"];

    $oldAmount = $edits->getSolde();

    $total = $oldAmount + $_POST["amount"];

    $edit -> editAccount($total, $account);


}


require "view/depositView.php";

