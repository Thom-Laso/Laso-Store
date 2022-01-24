<?php
    $dbcon= new mysqli("localhost","root", "","lasostore_db");
    if(!$dbcon)
        echo "not Connected";
    else
        echo "";
?>