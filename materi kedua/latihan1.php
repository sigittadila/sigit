<?php
class user{
    private $username;
    private $password;

    public function __construct($user, $pass){
        $this->username = $user;
        $this->password = $pass;
    }
    public function getusername(){
        return $this->username;

    }
}

$username = new user("aldo", "12345");
echo $username->getusername(); 
?>  