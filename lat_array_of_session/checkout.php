<!-- <!doctype >
<html>
    <head>
    <title>Checkout</title>
    </head>

	
    <body> -->
    <?php
        session_start();
        // if(empty($_SESSION['kodeBarang'])){
        //     $_SESSION['kodeBarang'] = array();
        // }
        // array_push($_SESSION['kodeBarang'], $_GET['kodeBarang']);
        // $idx=0;
        // unset($_SESSION['kodeBarang']);
        if(!isset($_SESSION['kodeBarang'])){
            $idx = 1;
        }
        else
        {
            $idx = sizeof($_SESSION['kodeBarang']) + 1;
        }

        if(!in_array($_GET['kodeBarang'], $_SESSION['kodeBarang'])){
            $_SESSION['namaBarang'][$idx] = $_GET['namaBarang'];
            $_SESSION['hargaBarang'][$idx] = $_GET['hargaBarang'];
        }
            
        echo $idx;
        // header('location:show_checkout.php');
        ?>
       <a href=<?php echo 'show_list_barang.php';?>>
                        Back</a>
                        
        
    <!-- </body>
</html> -->
