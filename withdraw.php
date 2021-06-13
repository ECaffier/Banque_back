<?php
require "model/operationModel.php";
require "model/db.php";
require "model/entity/user.php";
require "model/entity/account.php";
require "model/entity/operation.php";
require "model/accountModel.php";



session_start();

if(!isset($_SESSION["user"])): 
    header("Location:login.php");
endif; 

if(!empty($_POST)) {
    $deposit = new Operation($_POST);

    $depositModel = new OperationModel();

    $depositModel->withdraw($deposit);

    $edit = new accountModel();

    $edits = $edit->getOneAccountByUser($_SESSION["user"]->getUserID(), $_GET["id"]);

    $account = $_GET["id"];

    $oldAmount = $edits->getSolde();

    $total = $oldAmount - $_POST["amount"];

    $edit -> editAccount($total, $account);
}


require "view/withdrawView.php";