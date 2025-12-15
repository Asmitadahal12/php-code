<?php
$age=15;
try {
    
    
    // $b= $a/0;
    if($age>=60){

        throw new \Exception("Age cannot be higher than 59");
    }
    echo "Successfully registered";
} catch (\Throwable $th) {
    // print_r($th);
    echo $th->getMessage();
}
finally{
    echo "<br/> \nThank you for using our services";
}



?>