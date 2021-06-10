<?php
require "model/accountModel.php";
require "model/db.php";
require "model/entity/user.php";
require "model/entity/account.php";

session_start();



if(!isset($_SESSION["user"])): 
    header("Location:login.php");
endif; 

if(!empty($_POST)) {
    $account = new Account($_POST);

    $accountModel = new AccountModel();

    $accountModel->addAccount($account);
}


require "view/newAccountView.php";