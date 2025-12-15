<?php 
session_start();
include("oops.php");
// $_SESSION["username"] = "Asmita";
// $_SESSION["password"] = "Asmita123";
// $obj=new First("Asmita","Kathmandu","","986545667567");
// $obj->name="Asmita";
// $obj->address="Kathmandu";  
// $obj->email= "email@gmail.com";
// $obj->phone= "986545667567";

// $obj->displayInfo();

// $objSecond=new Second(1);
// $objSecond->updateCount(50);
// $objSecond->countDisplay();
// $objSecond->


echo StatsTest::$address;
// singleone design pattern 
StatsTest::returnFirst()->displayInfo();
echo StatsTest::returnFirst()->address;


?>
 












