<?php
include('connection.php');

function saveData($name,$address,$email,$phone,$file_name){
$conxn=connect();
$query="insert into tbl_user(name,address,email,phone,profile) values('$name','$address','$email','$phone','$file_name')";
 $res=mysqli_query($conxn,$query);
 //decisive parameter
// $affrows=mysqli_aff_rows($res);
/////inset updater delete afftected rows
//////select numrows
 return $res;
}

function getData(){
$conxn=connect();
$query="select * from tbl_user";
 $res=mysqli_query($conxn,$query);
 $numrows=mysqli_num_rows($res);
 $data=array();
 if($numrows){
    while($row=mysqli_fetch_assoc($res)){
       array_push($data,$row); 
    }
 }
return $data;
//  print_r($numrows);
}

function deleteUser($userId,$img){
$conxn=connect();
 $query=" delete from tbl_user where id='$userId'";
 $res=mysqli_query($conxn,$query);
 unlink('../uploads/'.$img);
 return $res;
}
?>