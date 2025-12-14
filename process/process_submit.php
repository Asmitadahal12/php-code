<?php

include('../functions.php');
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$tmp_name=$_FILES['profile']['tmp_name'];
$file=$_FILES['profile']['name'];
 $file_name=date('ymdhis').$file;
 
//////connecting
       

// echo $name.' '.$address.' '.$email.' '.$phone;
  if($name!='' && $address!=''&& $email!=''&& $phone!=''){
  
   $affrows=saveData($name,$address,$email,$phone,$file_name);
  if($affrows>0){
  
   move_uploaded_file($tmp_name,'../uploads/'.$file_name);
   header('location:../index.php?result=success');
  }
  else{
     header('location:../index.php?result=failed');
  }
}
else{
     header('location:../index.php?result=blank submission is not allowed');
  }

