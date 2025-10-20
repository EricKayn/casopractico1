<html>
    <head>
        <style>
             body {
            font-family: Arial, sans-serif;
            background-color: #f6f8f6;
            text-align: center;
            padding-top: 100px;
        }
        input[type="submit"]{
                width: 210px;
                padding: 10px;
                 background-color: #ade2afff;
            }
        </style>
    </head>
<body></body>
<?php
session_start();
echo "Bienvenido <br><br>";
if(isset($_SESSION['usuario'])){
    echo $_SESSION['usuario']."<br><br>";
    echo "tu sesion esta iniciada<br><br>";
}else{
    echo "no puedes ver esta pagina, logueate, menso<br><br>";
}
?>
    <form action="logout_caso_practico2.php" method="post">
    <input type="submit" name="enviar" value="Cerrar sesión">
</body>
</html>