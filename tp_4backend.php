<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>1.</h2>
    <?php
    $pares = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"];
     foreach ($pares as $valor) {
        print $valor;
        echo "\n";
     }     
    ?>

    <h2>2.</h2>
    <?php
    $array = ["Pedro", "Ana", "34","1"];
    print_r ($array);
    ?>
</body>
</html>