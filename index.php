<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Giai phuong trinh bac 2: ax<sup>2</sup> + bx + c = 0</p>
<form method="post">
    Enter a, b, c :
    <input type="number" name="coefficient1">
    <input type="number" name="coefficient2">
    <input type="number" name="coefficient3">
    <input type="submit" value="Enter">
</form><br>
<?php
$coefficient1 = $_POST['coefficient1'];
$coefficient2 = $_POST['coefficient2'];
$coefficient3 = $_POST['coefficient3'];
include 'QuadraticEquation.php';
$quadraticEquation = new QuadraticEquation($coefficient1, $coefficient2, $coefficient3);
try {
    if ($coefficient1 == 0) {
        throw new Exception('a phai khac 0, a = 0 day khong phai phuong trinh bac 2');
    }
    if ($quadraticEquation->getDiscriminant() > 0) {
        echo 'Phuong trinh co 2 nghiem: ' . $quadraticEquation->getRoot1() . ', ' . $quadraticEquation->getRoot2();
    } elseif ($quadraticEquation->getDiscriminant() == 0) {
        echo 'Phuong trinh co 1 nghiem kep: ' . $quadraticEquation->getRoot1();
    } else {
        echo 'The equation has no roots';
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
}
?>
</body>
</html>
