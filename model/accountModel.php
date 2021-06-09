<?php
require "connexion.php";

class accountModel{

    private PDO $_db;

    function getAccountByUser(INT $userID){
        $query = $this->_db->prepare("SELECT * FROM account WHERE account.userID=:userID");
        $query->execute([
            "userID"=>$userID
        ]);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
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

