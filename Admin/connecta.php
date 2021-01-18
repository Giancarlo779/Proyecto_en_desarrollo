<?php
    include ("configuracion.php");

    function conexionMysql(){
        $conectar = mysqli_connect(SERVER, USER, PASS, BD);

        if(!$conectar){
            echo "No es posible establcer una conexión a la base de datos.".mysqli_connect_error();

        }else{

            echo "Conexión exitosa";
        
        }

        mysqlli_set_charset($conectar,"utf8");
        return $conectar;
    }

    conexionMysql();

   

?>