
<?php
require "connexion.php";


function addAccount(PDO $db, array $newAccount){
    $query= $db->prepare("INSERT INTO account(date_creation, account_type, solde, userID) VALUES(NOW(),:account_type, :solde, :userID)");
    $result = $query->execute([
        "account_type" => $newAccount["account_type"],
        "solde" => $newAccount["solde"],
        "userID" => $_SESSION["user"]["userID"]
    ]);
    return $result;
}

?>

