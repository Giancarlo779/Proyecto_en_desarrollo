<?php
    require "vistas.php";
    require "modelo.php";

    //sleep(1);
    $tipoOpera = $_POST["tipoOperacion"];


    function ejecutarOperacion ($tipoOpera){
        if ($tipoOpera == "registrarUsuario"){
            registrarUsuario ($_POST["NombreTXT"], $_POST["ApellidoTXT"], $_POST["TelefNUM"],
            $_POST["correoReg"], $_POST["ContPass"]);
        } elseif ($tipoOpera == "inicioSesion"){
            inicioSesion ($_POST["usuario"], $_POST["contraseñaPass"]);
        }
    }
    ejecutarOperacion($tipoOpera);
    
    //echo $nombre;
?>