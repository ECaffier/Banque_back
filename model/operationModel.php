<?php 

class operationModel{

    private PDO $_db;

    function deposit(Operation $operation){
        $query= $this->_db->prepare("INSERT INTO operation (operation_type, amount, date_operation, motif_operation, accountID) VALUES('depot', :amount, NOW(), :motif_operation, :accountID)");
        $result = $query->execute([
            "amount" =>$operation->getAmount(),
            "motif_operation" => $operation->getMotif_operation(),
            "accountID"=>$_GET["id"]

        ]);
        return $result;
    }
    function withdraw(Operation $operation){
        $query= $this->_db->prepare("INSERT INTO operation (operation_type, amount, date_operation, motif_operation, accountID) VALUES('withdraw', :amount, NOW(), :motif_operation, :accountID)");
        $result = $query->execute([
            "amount" =>$operation->getAmount(),
            "motif_operation" => $operation->getMotif_operation(),
            "accountID"=>$_GET["id"]

        ]);
        return $result;
    }

    function __construct(){
        $this->_db = DataBase::getDB();
    }



}


?>