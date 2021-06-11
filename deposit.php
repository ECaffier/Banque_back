<?php
require "model/operationModel.php";
require "model/db.php";
require "model/entity/user.php";
require "model/entity/account.php";
require "model/entity/operation.php";



session_start();

if(!isset($_SESSION["user"])): 
    header("Location:login.php");
endif; 

if(!empty($_POST)) {
    $deposit = new Operation($_POST);

    $depositModel = new OperationModel();

    $depositModel->deposit($deposit);
}


require "view/depositView.php";

