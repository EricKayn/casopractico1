<?php
    $total = 0;
    $aprobados = 0;
    $reprobados = 0;
    $suma = 0;
    $mejor = 0;
    $peor = 10;
    $np = 0;
if (count($_REQUEST)) {
    /* Foreach lee todos los datos dentro del arreglo, $_REQUEST recibe todos los datos de nuestro formulario y la variable 
    $calif accede a cada valor de nuestro arreglo para poder utilizarlos en nuestros if :) */
    foreach ($_REQUEST as $calif) {
        if ($calif == "NP") {
            $np++;
        } else {
            $cal = (int)$calif; /* (int) Se utliza para volver enteros nuestros valores ya que estan predeterminados como cadenas */
            $suma += $cal;
            $total++;

            if ($cal >= 6) $aprobados++;
            else $reprobados++;

            if ($cal > $mejor) $mejor = $cal;
            if ($cal < $peor) $peor = $cal;
        }
    }

    if ($total > 0) {
        $promAprob = ($aprobados * 100) / $total;
        $promReprob = ($reprobados * 100) / $total;
        $promedio = $suma / $total;
    } else {
        $promAprob = $promReprob = $promedio = 0;
    }

    echo "Porcentaje de aprobados: $promAprob %<br>";
    echo "Porcentaje de reprobados: $promReprob %<br>";
    echo "Aprovechamiento general: $promedio<br>";
    echo "Mejor calificación: $mejor<br>";
    echo "Peor calificación: $peor<br>";
    echo "Cantidad de NP: $np<br>";

} else {
    echo "Acceso no válido";
}
?>