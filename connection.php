<?php


   function connect(){
        $host='localhost';
        $user='root';
        $password='';
        $db='project';
        $conxn=mysqli_connect($host,$user,$password,$db);
        return $conxn;
    }
?>

