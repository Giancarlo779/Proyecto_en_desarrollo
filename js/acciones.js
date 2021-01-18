$(document).ready(documentoCargado)

function documentoCargado () {
    //alert("El JS está funcionando correctamente")
    $("#formu-registro").submit(registrarUsuario)
    $("#formu-inicio").submit(inicioSesion)
}

function registrarUsuario(e){
    e.preventDefault()
    //alert("Está funcionando correctamente")
    var datos = $("#formu-registro").serialize()
    //console.log(datos)
    $.ajax({
        url: "Admin/controlador.php",
        type: "POST",
        data: datos,
        beforeSend: function(){
            $("#msnEstadoRegistro").html("<img src='images/loading.gif'>")
        },
        success: function(res){
            $("msnEstadoRegistro").html(res)
            //success: function(data) {
                //console.log(data)
        }
    })
}

function inicioSesion(e){
    e.preventDefault()
    alert("Está funcionando correctamente")
    var datos = $("#formu-inicio").serialize()
    //console.log(datos)
    $.ajax({
        url: "Admin/controlador.php",
        type: "POST",
        data: datos,
        beforeSend: function(){
            $("#msnInicio").html("<img src='images/loading.gif>")
        },
        success: function(res){
            if (res == 1){
                window.location = "Admin/index.php"
                //Inicia sesión
            }else{
                $("#msnInicio").html(res)
            }
        }
    })
}