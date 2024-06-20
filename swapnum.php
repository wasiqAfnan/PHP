<?php
    if($_POST['sub']){
        $a = $_POST['n1'];
        $b = $_POST['n2'];

        $temp = $a;
        $a = $b; 
        $b = $temp;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Num</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label> Number1:</label>
        <input type="text" name="n1">
        <br>
        <label> Number2:</label>
        <input type="text" name="n2">
        <br>
        <input type="submit" name="sub" value="swap">
    </form>
    <label> Number1:</label>
    <input type="text" value="<?php echo $a ?>">
    <br>

    <label> Number2:</label>
    <input type="text" value="<?php echo $b ?>">
    <br>
</body>
</html>