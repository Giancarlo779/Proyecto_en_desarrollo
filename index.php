<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Web Clínica OnLimon</title>
    <meta name="description" content="Sitio web de prueba para
    el proyecto de Programación de Webs App Responsivas">
   <meta name="keywords" content="Proyecto en desarrollo">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/estilos.css">
   

    </head>
    <body>

        <header>

            <div class="container"></div>
            <div class="col-md-6"> 
                <h1>Registro General</h1>
            </div>
            <div class="col-md-6"></div>
               <div class="btns-inicio">
                   <button type="button" class="btn btn-primary"
                    data-toggle="modal" data-target="#inicioSesion"> Iniciar sesión</button>
                    
                   <button type="button" class="btn btn-warning" 
                   data-toggle="modal" data-target="#registrarme"> Registrarme</button>
               </div>
              
               
        </header>
        
        
       
       <?php require "ventanasModales.html"; ?> 

        
        
    
    <script src="https://kit.fontawesome.com/5677f795ed.js" crossorigin="anonymous">
    </script>

    <script src="js/jquery.js"> </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/acciones.js"></script>

    </body>
   
</html>