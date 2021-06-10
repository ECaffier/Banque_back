<?php

class accountModel{

    private PDO $_db;

    function getAccountByUser(INT $userID){
        $query = $this->_db->prepare("SELECT * FROM account WHERE account.userID=:userID");
        $query->execute([
            "userID"=>$userID
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key =>$account) {
            $result[$key] = new Account($account);
        }
        return $result;
    }

    function getOneAccountByUser(int $userID, int $accountID){
        $query = $this->_db->prepare("SELECT * FROM account WHERE account.userID=:userID AND accountID=:accountID");
        $query->execute([
            "userID"=>$userID,
            "accountID"=>$accountID 
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $result = new Account($result);
        return $result;
    }
    function addAccount(Account $newAccount){
        $query= $this->_db->prepare("INSERT INTO account(date_creation, account_type, solde, userID) VALUES(NOW(),:account_type, :solde, :userID)");
        $result = $query->execute([
            "account_type" => $newAccount->getAccount_type(),
            "solde" => $newAccount->getSolde(),
            "userID" => $_SESSION["user"]->getUserID()
        ]);
        return $result;
    }
    function deleteAccount($accountID){
        $query = $this->_db->prepare("DELETE FROM account WHERE accountID=:accountID");
        $result = $query->execute([
            "accountID"=>$accountID
        ]);
        return $result;
    }

    function __construct(){
        $this->_db = DataBase::getDB();
    }

}


//     public function getAccountByUser(int $userID){
//         $db = $this->dbConnect();
//         $query = $db->prepare("SELECT * FROM account WHERE account.userID=:userID");
//         $query->execute([
//             "userID"=>$userID
//         ]);
//         $result = $query->fetchAll(PDO::FETCH_ASSOC);
//         return $result;

//     }

//     private function dbConnect(){
//         $db = new PDO('mysql:host=localhost;dbname=banque_php', 'root');
//         return $db;
//     }

?>

