<?php

include('../functions.php');
$id=$_GET['id'];
$profile=$_GET['profile'];

 
//////connecting
       

// echo $name.' '.$address.' '.$email.' '.$phone;
 
  
   $affrows=deleteUser($id,$profile);
  if($affrows>0){
   header('location:../index.php?result=success');
  }
  else{
     header('location:../index.php?result=failed');
  }



