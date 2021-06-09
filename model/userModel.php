<?php 

// function getUserByEmail(PDO $db, string $email) {
//     $query = $db->prepare("SELECT * FROM user WHERE email=:email");
//     $query->execute([
//         "email" => $email
//     ]);
//     $result = $query->fetch(PDO::FETCH_ASSOC);
//     return $result;

// }

final class userModel{

    private PDO $_db;

    public function getUserByEmail(string $email):array{
        $query = $this->_db->prepare("SELECT * FROM user WHERE email=:email");
        $query->execute([
            "email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function __construct(){
        $this->_db = DataBase::getDB();
    }



}
?>