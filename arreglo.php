<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglitoss</title>
</head>
<body>
    <form method="Post" action="">
        <h3>Inpresion de arreglo</h3>
        <button type="submit" name="imp">imprimir</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['imp'])){
            $array=[];
            for($i=0; $i<50; $i++){
                $array[$i]=rand(0,100);
            }
            echo "<h3>Arreglo imprimido:</h3>";
            for($i=0; $i<50; $i++){
                echo $array[$i]. ", ";
            }
            sort($array);
            echo "<h3>Top 3 numeros mas grandes del arreglo:</h3>";
            for($i=49; $i>46; $i--){
                echo $array[$i]. "<br>";
            }
        }
    ?>
</body>
</html>