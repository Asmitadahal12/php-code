<?php
class First{
    // access modifier 
    // public private protected 
    protected $name;
    public $address;
    public $email;
    public $phone;

    public function __construct($name, $address, $email, $phone){
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;  
    }
      public function displayInfo(): void{
        echo " ".$this->name."
         ".$this->address.$this->email." ".$this->phone;
      }

    

}

class Second extends First{

    private $count;

    public function __construct($count){
        $this->count = $count;
        
    }
    public function setName($name){
        $this->name = $name;
    }   

    public function updateCount($count){
        $this->count = $count;
    }
    public function countDisplay(){
      echo "The count is: ".$this->count;
    }
}

class StatsTest{

public static $address="Kathmandu";
public static $obj;  
    private function __construct(){
       
    }

    public static function returnFirst(){
      $obj=new First("Asmita","Kathmandu","","986545667567"); 
      return $obj;
    }
}



