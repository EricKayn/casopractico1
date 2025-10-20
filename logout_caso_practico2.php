<?php
session_start();
unset($_SESSION['usuario']);
header("location: login_caso_practico2.php");
?>