<?php
    session_start();
?>

<!doctype >
<html>
    <head>
    <title>Demo of Session array</title>
    </head>

    <body>
    <?php
        
        // $_SESSION['harga']=array();
        array_push($_SESSION['harga'],0,2000,2500,1500,3000);
        array_push($_SESSION['harga'],3500);
        // $_SESSION['harga'][0] = 2000;
        // $_SESSION['harga'][1] = 2000;
        // $_SESSION['harga'][2] = 2500;
        // $_SESSION['harga'][3] = 1500;
        // $_SESSION['harga'][4] = 3000;
        // echo "Number of Items in the cart = ".sizeof($_SESSION['harga'])."<br>";
        $i=1;
        // for($i=0;$i<sizeof($_SESSION['harga']);$i++){
        //     $j = $i+1;
        //     echo "<br> Harga (".$j.") = ",($_SESSION['harga'][$i]);
        // }

        // while (list ($key, $val) = each ($_SESSION['harga'])){
        //     $j = $key+1;
        //     echo "<br> Harga (".$j.") = ".$val ;
        // }

        while ($i < sizeof($_SESSION['harga'])){
            // $j = $key+1;
            echo "<br> Harga (".$i.") = ".($_SESSION['harga'][$i]) ;
            $i++;
        }
        
        
    ?>
    </body>
</html>
