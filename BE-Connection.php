<?php   
    //$dbSource="mysql:host=localhost;dbname=college";
    //$username="root";
    //$password="";
    //$db="phpmyadmin";
    $dbcon=new mysqli("localhost","root","","LasoStore");

    if($dbcon)
        echo" Connnected";
    else    
        echo "Successfully Connected";
?>
