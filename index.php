<?php
require "model/db.php";
require "model/accountModel.php";
require "model/userModel.php";
require "model/entity/user.php";
require "model/entity/account.php";

session_start();

$userModel = new accountModel();
$user = $_SESSION["user"];


if(!isset($_SESSION["user"])): 
  header("Location:login.php");
endif; 

$accounts = $userModel->getAccountByUser($user->getUserID());
  // $accounts = getAccountByUser($db, $_SESSION["user"]["userID"]);


require "view/indexView.php";
 ?>

