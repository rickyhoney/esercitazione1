<html>

<head> <title> Convertitore </title> </head>

<body>
    <form action = "converti.php" method = "get">
        <p> numero: <input type = "text" name = "num"> </p>
        <input type = "submit" values="submit">
</form>

<?php

$num = $_GET ['num'];
$numero = " ";

while($num >= 1000){
    $numero = $numero.'M';
    $num = $num - 1000;
}
    while($num >= 500){
        $numero = $numero.'D';
        $num = $num - 500;
    }
        while($num >= 100){
            $numero = $numero.'C';
            $num = $num - 100;
        }
            while($num >= 50){
                $numero = $numero.'L';
                $num = $num - 50;
            }
                while($num >= 10){
                $numero = $numero.'X';
                $num = $num - 10;
                }
                    while($num >= 5){
                    $numero = $numero.'V';
                    $num = $num - 5;
                    }
                        while($num >= 1){
                        $numero = $numero.'I';
                        $num = $num - 1;
                        }

echo $numero;

?>
</body>
</html>

     