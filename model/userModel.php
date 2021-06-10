<?php 



final class userModel{

    private PDO $_db;

    public function getUserByEmail(string $email){
        $query = $this->_db->prepare("SELECT * FROM user WHERE email=:email");
        $query->execute([
            "email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $result = new User($result);
        return $result;
    }
    function __construct(){
        $this->_db = DataBase::getDB();
    }



}

// function getUserByEmail(PDO $db, string $email) {
//     $query = $db->prepare("SELECT * FROM user WHERE email=:email");
//     $query->execute([
//         "email" => $email
//     ]);
//     $result = $query->fetch(PDO::FETCH_ASSOC);
//     return $result;

// }
?>