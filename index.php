<?php
session_start();
require "model/accountModel.php";
require "model/connexion.php";


$accounts = getAccountByUser($db, $_SESSION["user"]["userID"]);

?>

    <?php if(!isset($_SESSION["user"])): 
      header("Location:login.php");
    endif ?>


<?php 

require "view/indexView.php";
 ?>

