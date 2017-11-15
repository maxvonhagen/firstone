function add_funcion(){
var  nombre_pelicula,hora_funcion,msg,num_sala,form;
nombre_pelicula = $('#pelicula_nombre').val();
hora_funcion = $('#pelicula_hora_comienzo').val() +'-'+ $('#pelicula_hora_final').val();
num_sala = $('#pelicula_sala').val();
img = $('#file').val();
img = img.split('\\');
if (nombre_pelicula != "" && hora_funcion != "" && num_sala != "") {
if (img != "") {
  form = 'nombre_pelicula='+nombre_pelicula+'&hora_funcion='+hora_funcion+'&num_sala='+num_sala+'&img='+img[img.length-1];
$.ajax({
  type: 'post',
  url : '?c=employee&m=add_funcion',
  data: form,
  //contentType: false,
    processData: false,
  success(response){
    if(response == 1)
    msg = '<div class="alert alert-dismissible alert-success">';
    msg += '<button type="button" class="close" data-dismiss="alert">x</button>';
    msg += '<strong>Correcto</strong>  jajjaja redirigiendo</div>';
     $('#_add_funcion_').html(msg);
    // window.location.replace("?c=employee&m=index");
  }
});
} else {
  msg ='<div class="alert alert-dismissible alert-warning">';
  msg += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  msg += '<strong>Error</strong>  Selecione una imagen </div>';
  $('#_add_funcion_').html(msg);
}
} else {
  msg ='<div class="alert alert-dismissible alert-danger">';
  msg += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  msg += '<strong>Error</strong>Datos Basios</div>';
  $('#_add_funcion_').html(msg);
}
}
/******IMAGEN*/////



$(function(){
   $("input[name='file']").on("change", function(){
       var formData = new FormData($("#formulario")[0]);
       var ruta = "?c=employee&m=imagen";
       $.ajax({
           url: ruta,
           type: "POST",
           data: formData,
           contentType: false,
           processData: false,
           success: function(datos)
           {
               $("#imagen").html(datos);
           }
       });
   });
});

$('body').on('change', '#file', function(){
});


/***------------------------------------------------------------****/

function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
