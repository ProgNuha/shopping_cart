<?php
    if(!isset($_GET['page'])) header('location: ?page=show_list_barang');
?>
<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="css/template.css">
        <title>Shopping Cart</title>
    </head>
    <body>
        
        <table align="center" width="80%" cellspacing=0%>
            <!-- header -->
            <tr>
                <!-- Nav -->
                <tr>
                    <tr >
                        <td align="center" colspan="4">
                            <p><strong class="font-header">SHOPPING CART</strong>
                            <br>TOKO ALAT TULIS</br> </p>
                        </td>
                        <td width="20%" align="center">
                            <!-- <img src="assets/sman1grt.jpg" width="100" height="100"> -->
                        </td>
                    </tr>
                </tr>
                <!-- Menu -->
                
            </tr>
            <!-- body -->
            <tr>
                <!-- News -->
                <div id="content">
                    <?php
                    if($_GET['page'])
                    {
                        $page = $_GET['page'];
                        $display = $page.'.php';
                        include($display);
                    }
                    else
                    {
                        echo 'try_Link';
                    };
                    ?>
                </div>
            </tr>
            
            <!-- footer -->
            <tr>
                <tr id="footer">
                    <td colspan="5" height="90" align="center">
                        Copyright - (171511050) Mufida Nuha Salimah
                    </td>
                </tr>
            </tr>
            
        </table>        
    </body>
</html>