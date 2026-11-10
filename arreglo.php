<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglitoss</title>
</head>
<body>
    <?php
        $array=[];
        for($i=0; $i<50; $i++){
            $array[$i]=rand(0,100);
        }
        echo "<h3>Arreglo imprimido:</h3>";
        for($i=0; $i<50; $i++){
            echo $array[$i]. ", ";
    }
    ?>
</body>
</html>