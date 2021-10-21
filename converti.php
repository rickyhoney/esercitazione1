<html>

<head> <title> Convertitore </title> </head>

<body>
    <form action = "converti.php" method = "get">
        <p> metodo 1(mio): <input type = "text" name = "num"> </p>
        <p> metodo 2(prof): <input type = "text" name = "rom"> </p>
        <p> metodo 3: <input type = "text" name = "ara"> </p>
        <input type = "submit" values="submit">
</form>

<?php

$num = $_GET ['num'];
$numero = " ";

while($num >= 1000){
    
    if($num == 4000){
        $numero = $numero.'MMMM';
            $num = $num - 4000;
    } else{
   
        $numero = $numero.'M';
        $num = $num - 1000;
        }
    }

    while($num >= 500){
        if($num == 900){
            $numero = $numero.'CM';
            $num = $num - 900;
        } else{
            $numero = $numero.'D';
            $num = $num - 500;
            }
        
        }

        while($num >= 100){
            
            if($num == 400){
                $numero = $numero.'CD';
                $num = $num - 400;
            } else{
            
                $numero = $numero.'C';
                $num = $num - 100;
                }
            }

            while($num >= 50){

                if($num == 90){
                    $numero = $numero.'XC';
                    $num = $num - 90;
                } else{
                    $numero = $numero.'L';
                    $num = $num - 50;
                    }
                }

                while($num >= 10){
                    if($num == 40){
                        $numero = $numero.'XL';
                        $num = $num - 40;
                    } else{

                        $numero = $numero.'X';
                        $num = $num - 10;
                        }
                    }

                    while($num >= 5){
                        if($num == 9){
                            $numero = $numero.'IX';
                            $num = $num - 9;
                        } else{
                            $numero = $numero.'V';
                            $num = $num - 5;
                        }
                    
                    }
                        while($num >= 1){
                        $numero = $numero.'I';
                        $num = $num - 1;
                        }

echo $numero;

$numArabi = array(1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);
$numRomani = array("M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "I");

$rom = intval($_GET["rom"]);
$r = 0;
$stringa = " ";

while ($rom > 0){
    if ($rom >= $numArabi[$r]){
        $rom = $rom - $numArabi[$r];
        $stringa = $stringa . $numRomani[$r];

    } else {
        $r = $r + 1;
     }  
    
} 

echo $stringa;




  $ara = $_GET["ara"];
 
  $dividi = array();

  $dividi = str_split($ara);

  for($i=0; $i<10; $i++ ){

    echo $dividi[$i];

  }

  

while ($dividi.empty()){

    if ($ara == $numromani[$r1]){
        $dividi[$r1].delete();
        $stringa1 = $stringa + $numArabi[$r1];

    } else {
        $r1 = $r1 + 1;
     }  
    
} 




?>
</body>
</html>

     