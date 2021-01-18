<?php require "seguridad.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <tittle> Document </tittle>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
        <header>
                <div class="container">
                <h1> Panel de administracion</h1>
                </div>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" 

                type="button" id="dropdownMenuButton" 
                <?php echo $_SESSION["nombreUsuario"];?>
                data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false"> Dropdown button </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Editar perfil</a>
                  <a class="salir.php" href="#">Cerrar sesión</a>
                </div>
        </div>

       </header>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/acciones.js"></script>
</body>
</html>

