<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
        <button name="btnTest">Test</button>
    </form>
    <?php
        if(isset($_POST['btnTest'])){
            echo "This is  TESTING";
        }
    ?>
</body>
</html>