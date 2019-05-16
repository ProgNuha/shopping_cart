
    <?php
    session_start();
    if(isset($_SESSION['namaBarang'])){
        echo sizeof($_SESSION['namaBarang']);
        echo "True";
    }
    else{
        echo "False";
    }
 ?>
 <a href=<?php echo 'show_list_barang.php';?>>
                        Back</a>
   

