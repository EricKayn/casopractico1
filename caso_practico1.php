<?php
/*
1) El simbolo $ se utiliza para inicializar una variable 
2) Las comillas se tienen que utilizar cada que se quiere poner un nuevo dato, los datos se cierran con ,
3) Al final de cada linea se necesita cerrar con ; */
$alumnos = ["Evelyn","Aldair","Leonel","Ulises","Danna","Sergio","Ximena","Gisselle","Ricardo","Gabriel"];
$calificaciones = ["1","2","3","4","5","6","7","8","9","10","NP"];
?>
<html>
<head>
    <meta charset="UTF-8" />
    <style>
        table{
            background-color: #0542FA;
            border: 5px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            color: white;
            font-family: sans-serif ; 
        }
        select{
            background-color: #6358FA;
            width: 100px;
            border: 2px solid black; 
            border-radius: 5px;
        }
        h1{
            font-family:Arial, Helvetica, sans-serif;
        }
        input{
            width: 212px;
            border: 5px solid black;    
        }
    </style>
</head>
<body>
    <h1>Calificaciones de alumnos</h1>
    <form method="POST" action="est_caso_practico1.php">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Calificación</th>
            </tr>
    <!--En este ejercicio se utilizo el bucle foreach pues
    recorre un bloque de código para cada elemento de una matriz/arreglo o cada propiedad de un objeto. -->
            <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td><label>
                        <?php echo $alumno ?>
                    </label></td>
                    <td><select name="cbo<?php echo $alumno ?>">
                    <?php foreach($calificaciones as $calif): ?>
                    <option><?php echo $calif ?></option>
                    <?php endforeach?>    
                    </select></td>
                    </tr> 
            <?php endforeach; ?>
        </table>
            <input type="submit" value="enviar calificaciones">
    </form> 
</body>
</html>