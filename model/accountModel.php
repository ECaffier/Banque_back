<?php
require "connexion.php";


function getAccountByUser(PDO $db, INT $userID){
    $query = $db->prepare("SELECT * FROM account WHERE account.userID=:userID");
    $query->execute([
        "userID"=>$userID
    ]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>