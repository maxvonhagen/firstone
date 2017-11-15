function goLogin(){
var name,pass,msg,form,rta;
name = __('name').value;
pass = __('pass').value;
if(name != "" && pass != ""){
form='name='+name+'&pass='+pass;
  $.ajax({
   type: 'post',
   url : '?c=index&m=login',
   data: form,
   success (response){
     if(response == 1){
      rta = '<div class="alert alert-dismissible alert-success">';
       rta += '<button type="button" class="close" data-dismiss="alert">x</button>';
       rta += '<strong>Correcto</strong>jajjaja redirigiendo</div>';
       $('#_LOGIN_').html(rta);
         location.reload(true);
     }else if(response == 2) {
       rta= '<div class="alert alert-dismissible alert-danger">';
       rta +='<button type="button" class="close" data-dismiss="alert">x</button>';
       rta += '<strong>Error:</strong>Datos incorrectos</div>';
       $('#_LOGIN_').html(rta);
     }
   }
});
}else {
  msg ='<div class="alert alert-dismissible alert-danger">';
  msg += '<button type="button" class="close" data-dismiss="alert">Error</button>';
  msg += '<strong>Datos Basios</strong></div>';
  __('_LOGIN_').innerHTML = msg;

}
}
