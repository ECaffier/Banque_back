<?php 

require "model/db.php";
require "model/accountModel.php";


$delete = new AccountModel();

$delete -> deleteAccount($_GET["id"]);

header("location:index.php");

exit




?>