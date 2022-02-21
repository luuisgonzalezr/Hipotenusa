<?php
$cateto_1 = 3;
$cateto_2 = 4;

$hipotenusa = sqrt(pow($cateto_1,2)+pow($cateto_2,2));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cálculo de hipotenusa</title>
</head>
<body>
    <h1>Cálculo de la hipotenusa de un triángulo rectángulo</h1></br>

    <p>Cateto N° 1: <?php echo $cateto_1 ?> cm</p></br>
    <p>Cateto N° 2: <?php echo $cateto_2 ?> cm</p></br>


    <h2>La hipotenusa mide: <?php echo $hipotenusa ?> cm</h2>
</body>
</html>
