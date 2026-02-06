<?php
class fruit{
    public $name;
    public function __construct($nama){
        $this->name = $nama;
    }
    public function getname(){
        return "ini adalah buah " . $this->name;
    }
}
$apple = [
    new fruit("Mangga"),
    new fruit("anggur"),
    new fruit("apel"),
    new fruit("semangka"),
];
foreach($apple as $fruit){
    echo $fruit->getname() . "<br>";
}

?>
