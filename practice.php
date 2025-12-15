
<?php
session_start();
function userDetails($name,$address,$gender,$callback) {
 
    echo "Hello ".$callback($gender).' '.$name." you are from ".$address;
}
// defined function , anonymous function 

function title($gender)
{
   if($gender=='male'){
    return 'Mr.';
   } 
   else if($gender== 'female'){
    return 'miss.';
}
}

userDetails('asmita','Kathmandu','female',function($abc){
 if($abc=='male'){
    return 'Mr.';
   } 
   else if($abc== 'female'){
    return 'miss.';
}
});


echo($_SESSION['username'].' '.$_SESSION['password']);

// function within functiuon callback function

// var_dump(printName("sdjgvbdjfgbfjd"));
?>