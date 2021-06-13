<?php 

class Operation{

    protected int $operationID;
    protected string $operation_type;
    protected float $amount;
    protected string $date_operation;
    protected string $motif_operation;
    protected int $accountID;

    public function setOperationID(int $operationID){
        $this->operationID = $operationID;
    }
    public function getOperationID():int{
        return $this->operationID;
    }
    public function setOperation_type(int $operation_type){
        $this->operation_type = $operation_type;
    }
    public function getOperation_type():int{
        return $this->operation_type;
    }
    public function setAmount(float $amount){
        $this->amount = $amount;
    }
    public function getAmount():float{
        return $this->amount;
    }
    public function setDate_operation(string $date_operation){
        $this->date_operation = $date_operation;
    }
    public function getDate_operation():string{
        return $this->date_operation;
    }
    public function setMotif_operation(string $motif_operation){
        $this->motif_operation = $motif_operation;
    }
    public function getMotif_operation():string{
        return $this->motif_operation;
    }
    public function setAccountID(int $accountID){
        $this->accountID = $accountID;
    }
    public function getAccountID():int{
        return $this->accountID;
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    function __construct(?array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }

}


?>