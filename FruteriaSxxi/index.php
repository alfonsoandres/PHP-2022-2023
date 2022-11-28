<?php
session_start();

$compraRealizada = "";

if (isset($_GET['nombre'] )) {
    $_SESSION['nombre'] = $_GET['nombre'];
    $_SESSION['pedidos'] =[]; 
}
if (!isset($_SESSION['nombre'])) {
    require_once('app/entrada.php');
    exit();
}
if (isset($_POST["orden"])){

    if ($_POST["orden"] == "Anotar") {
        if (isset($_SESSION['pedidos'][$_POST['frutas']]))
            $_SESSION['pedidos'][$_POST['frutas']] += $_POST['cantidad'];
    }else {
            $_SESSION['pedidos'][$_POST['frutas']] = $_POST['cantidad'];
        }
    if ($_POST["orden"] == "Terminar") {
            require_once("app/adios.php");
            session_destroy();
            exit;
        }
    }
 require_once('app/compra.php');

   
