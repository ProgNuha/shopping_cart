<?php 
    include 'config.php'; 
    // if(empty($_SESSION['namaBarang'])){
    //     session_start(); 
    // }
    
?>

<!doctype >
<html>
    <head>
    <title>Demo of Session array</title>
    </head>

    <body>
    <?php
        $sql = "SELECT kodeBarang, namaBarang, hargaBarang, stockBarang FROM barang";
        $result = mysqli_query($conn, $sql); 
        if (mysqli_num_rows($result) > 0) {
            echo "<table style='border-collapse : collapse' border='2'>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th></th>
                    </tr>";
            // output data of each row
            while($item = mysqli_fetch_array($result)) {?>
                <tr align="left">
                    <td><?php echo $item['namaBarang']?>  </td>
                    <td><?php echo $item['hargaBarang']?> </td>
                    
                    <td align="center">
                        <a href=<?php echo 'checkout.php?kodeBarang='.$item['kodeBarang'].
                        
                        '&hargaBarang='.$item['hargaBarang'].
                        '&namaBarang='.urlencode($item['namaBarang']);?>>
                        Add</a>
                    </td>
                </tr>
            <?php }
            echo "</table>";
        } else {
            echo "0 results";
        }   
        
        
    ?>
    </body>
</html>