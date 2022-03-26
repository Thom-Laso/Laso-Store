<?php
    include("connection.php");
?>
<?php
    session_start();
    if (!isset($_SESSION['txtbxUsername']))
    header('Location: login_details.php');
?>

<html>
    <head>
        <title>Display Items</title>
    </head>
    <body>
        <center>
            <?php

                if(isset($_POST["submit"])){
                    $sql="select * from houseplastics";
                    $result=$dbcon -> query($sql);
                
                    echo "<table border=2><tr><td><b>Item Name</b></td><td><b>Item Id</b></td><td><b>Item Image</b></td></tr>";
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "<td>".$row["ItemName"]."</td>";
                            echo "<td>".$row["ItemId"]."</td>";
                            echo "<td>".$row["ItemImage"]."</td>";
                            echo "<td><img src='uploaded/".$row['ItemImage']."'></td></tr>";
                        }
                        echo"</table><br>";
                    }
                    else{
                        echo"No Result </center>";
                    }
                }
            ?>

            <form method="post">
                <h4>Display HouseHold Items</h4>
                <input type="submit" name="submit" value="DISPLAY">
            </form>
            <br><br>
        </center>
    </body>
</html>