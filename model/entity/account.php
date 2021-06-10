<?php 

class Account {

    const TYPE = ["PEL", "Livret A", "Courant"];

    protected int $accountID;
    protected string $date_creation;
    protected string $account_type;
    protected float $solde;
    protected int $userID;

    public function setAccountID(int $accountID){
        $this->accountID = $accountID;
    }
    public function getAccountID():int{
        return $this->accountID;
    }
    public function setDate_creation(string $date_creation){
        $this->date_creation = $date_creation;
    }
    public function getDate_creation():string{
        return $this->date_creation;
    }
    public function setAccount_type(string $account_type){
        if(in_array($account_type, self::TYPE)) {
            $this->account_type = $account_type;
        }
        else {
            $this->account_type = "Non valide.";
        }
    }
    public function getAccount_type():string{
        return $this->account_type;
    }
    public function setSolde(float $solde){
        $this->solde = $solde;
    }
    public function getSolde():float{
        return $this->solde;
    }
    public function setUserID(int $userID){
        $this->userID = $userID;
    }
    public function getUserID():int{
        return $this->userID;
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