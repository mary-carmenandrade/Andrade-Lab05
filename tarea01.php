<?php
    if ($_SERVER['REQUEST_METHOD']=='POST')
    {
        $hijos          = $_POST["hijos"];
        $venta_total    = $_POST["venta_total"];
        $sueldo_basico  = 600;

        $bonificacion = $hijos * 50;
        $comision     = $venta_total * 0.075 + $bonificacion;
        $sueldo_bruto = $sueldo_basico + $comision;
        $descuento    = $sueldo_bruto * 0.11;
        $sueldo_neto  = $sueldo_bruto - $descuento;

        echo "INFORMACIÓN: ". "<br> <br/>";
        echo "Su sueldo básico es de: " . $sueldo_basico . "<br>";
        echo "Su comisión es de:      " . $comision . "<br>";
        echo "Su bonificación es de:  " . $bonificacion . "<br>";
        echo "Su sueldo bruto es de : " . $sueldo_bruto . "<br>";
        echo "Su descuento es de:     " . $descuento . "<br>";
        echo "Su sueldo neto es de:   " . $sueldo_neto;
    }
?>