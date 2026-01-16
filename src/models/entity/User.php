<?php 
abstract class User{

    private $id = null;
    private $name;
    private $email;
    private $password;

    public function __construct($id, $name, $email, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    
    public function geteEmail(){
        return $this->email;
    }
}

