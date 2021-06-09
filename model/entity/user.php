<?php 

class User {

    protected int $userID;
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected string $pass;
    protected string $birthdate;


    public function setUserID(int $userID){
        $this->userID = $userID;
    }
    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }
    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function setPass(string $pass){
        $this->pass = $pass;
    }
    public function setBirthdate(string $birthdate){
        $this->birthdate = $birthdate;
    }
    public function getUserID():int{
        return $this->userID;
    }
    public function getFirstname():string{
        return $this->firstname;
    }   
    public function getLastname():string{
        return $this->lastname;
    }
    public function getEmail():string{
        return $this->email;
    }
    public function getPass():string{
        return $this->pass;
    }
    public function getBirthdate():string{
        return $this->birthdate;
    }

    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    function __construct(array $data = null){
        if($data){
            $this->hydrate($data);
        }
    }



}










?>