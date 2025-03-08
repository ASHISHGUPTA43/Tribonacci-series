<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="post">
    Enter the number:
    <input type="text" name="number">
    <input type="submit" value="Get the Tribonacci Series">
    </form>
    </center>
</body>
</html>
<?php
if($_POST){
    $n=$_POST["number"];
    $a=0;
    $b=0;
    $c=1;
    $d=$a+$b+$c;
    echo $a;
    echo $b;
    echo $c;
    for($i=4;$i<=$n;$i++){
        echo $d;
        $a=$b;
        $b=$c;
        $c=$d;
        $d=$a+$b+$c;
    }
}
?>