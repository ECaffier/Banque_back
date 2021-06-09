<?php

session_start();
require "model/db.php";
require "model/accountModel.php";
require "model/userModel.php";
require "model/entity/user.php";

$userModel = new accountModel();

  if(!isset($_SESSION["user"])): 
      header("Location:login.php");
  endif; 

  $users = $userModel->getAccountByUser($_SESSION["user"]["userID"]);

  // $accounts = new accountModel($_SESSION["user"]["userID"]);
  // $accounts = getAccountByUser($db, $_SESSION["user"]["userID"]);



require "view/indexView.php";
 ?>

