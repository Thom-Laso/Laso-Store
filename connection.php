<?php
    $dbcon= new mysqli("localhost","root", "","lasodb");
    if(!$dbcon)
        echo "not Connected";
    else
        echo "1";
?>