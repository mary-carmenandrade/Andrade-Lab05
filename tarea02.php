<?php
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $precio_actual = $_POST["precio_actual"];
        $cantidad      = $_POST["cantidad"];
       
        $nuevo_precio = $precio_actual * 0.05;
        $Icompra      = $nuevo_precio * $cantidad;
        $Idescuento   = $Icompra * 0.07;
        $Ipagar       = $Icompra - $Idescuento;
        $obsequio     = $cantidad * 2;

        echo "INFORMACIÓN: ". "<br> <br/>";

        echo "El nuevo precio de la gaseosa es  ====>  " . $nuevo_precio . "<br>";
        echo "El importe de la compra es de  ======>  " . $Icompra . "<br>";
        echo "El importe del descuento es de  =====>  " . $Idescuento . "<br>";
        echo "El importe a pagar es de  ==========>  " .  $Ipagar . "<br>";
        echo "Su obsequio por la compra son  =====>  " . $obsequio. " caramelos";
    }
?>