<?php
    if($_POST['sub']){
        $a = $_POST['v1'];
        $b = $_POST['v2'];
        $c = $a+$b;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addusingphp</title>
</head>
<body>
    
    <form action="#" method="post">
        <input type="text" name="v1"><br>
        <input type="text" name="v2"><br>
        <input type="submit" name="sub"><br>
    </form>
        
    
    <b>result: <?php echo $c; ?><b>
</body>
</html>