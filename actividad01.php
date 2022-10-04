<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 01 -Operaciones con PHP</title>
</head>
<body>
        <form method="post" action="">
        Ingresar Valor 1:<br>   <input type="text" name="valor1"><br> <br/>
        Ingresar Valor 2:<br>  <input type="text" name="valor2"><br> <br/>
        Resultado:<br> <br/>
        <input type="submit" name="Suma" value="Suma">

        </form>

<?php
date_default_timezone_set('America/Lima');
    if (isset($_POST["valor1"])){

        $numero1=$_POST['valor1'];
    }
    if (isset($_POST["valor2"])){

        $numero2=$_POST['valor2'];
    }

    if (isset($numero1) && isset($numero2)){
        $suma=$numero1 + $numero2;
        echo "El Resultado de la suma es: ".$suma;
    }
?>
</body>
</html> 