function goPeliculas(asientos){
var name,boletos,pelicula,asientos,num_asientos,form;
name = __('PEL_nombre').value;
boletos = __('PEL_boletos_cant').value;
pelicula = __('PEL_pelicula').value;
email = __('PEL_email').value;
num_asientos = __('PEL_boletos_cant').value;
if((boletos != "" || boletos != 0)  && name != "" && pelicula != ""){
form ='name='+name+'&boletos='+boletos+'&pelicula='+pelicula+'&asientos='+asientos+'&email='+email+'&num_asientos='+num_asientos;
$.ajax({
         data: form,
         type: "POST",
          url : '?c=employee&m=asignar',
         contentType:"application/x-www-form-urlencoded",
         success (response){
             $('#_peliculas_').html(response);
                }
              });
}else {
  msg ='<div class="alert alert-dismissible alert-danger">';
  msg += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  msg += '<strong>Error</strong>Datos Basios</div>';
  __('_peliculas_').innerHTML = msg;

}

}
