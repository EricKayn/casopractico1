 <?php
        session_start();
        if(isset($_SESSION['usuario'])){
        header("location:inicio_caso_practico2.php");
    }
        if(isset($_COOKIE['usuario'])){
         $_SESSION ['usuario'] = $_COOKIE['usuario'];
    } 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de sesión</title>
        <style>
             body {
                font-family: Arial, sans-serif;
                text-align: center;
                padding-top: 100px;
            }
            label{
                display: inline-block; /*Se utiliza esta linea para que los elementos aparezcan en linea.*/
                text-align: left;
                width: 120px;
                margin-right: 10px;
                font-size: 20px;
                margin-top: 15px;
            }
            input{
                border: 2px solid #c9c4c4ff;
                padding: 5px;
            }
            input[type="submit"]{
                width: 210px;
                padding: 10px;
                 background-color: #ade2afff;
            }
        </style>
    </head>
    <body>
        <img src="inicio de sesion.jpg" width="300px">
        <form  action="" method="POST" autocomplete="off">  <!--Se utilizó autocomplete="off" para que no se guardaran los datos que
        se colocaban en los campos de usuario y contraseña.-->
        <label>usuario</label>
        <input type="text" name="usuario"><br>
        <label>constraseña</label>
        <input type="password" name="constraseña"><br> 
        <input type="checkbox" name="recordar" value="1"><label>recuerdame</label><br>  
        <input type="submit" name="enviar" value="iniciar sesión">
        
        </form>
        <?php
        
        if(isset($_POST['enviar'])){
        $usuario =$_POST['usuario'];
        $contraseña =$_POST['constraseña'];
        if($usuario == 'ErickKayn' AND $contraseña=='erickkayn1'){
        $_SESSION ['usuario'] = $usuario;
        if(isset($_POST['recordar'])){
        setcookie('usuario',$usuario,time()+60*60);
        }else{
            setcookie('usuario', '', time() - 3600);
            
        }
            header("location: inicio_caso_practico2.php"); /*Se utiliza header para redireccionar a la página de inicio de nuestra sesión*/
        }else{
            echo "El usuario o contraseña no coinciden";
        }
        }
        ?>
    </body>
</html>