function goReg(){
var name,pass,pass_2,email,msg,form;
name = __('REG_name').value;
pass = __('REG_pass_1').value;
pass_2 = __('REG_pass_2').value;
email = __('REG_email').value;

if(name != "" && pass != "" && pass_2 != "" && email != ""){
if(pass == pass_2){
  form='name='+name+'&pass='+pass+"&email="+email;
    $.ajax({
     type: 'post',
     url : '?c=index&m=Registrar',
     data: form,
     success (response){
         $('#_REG_').html(response);
         window.location.replace("?c=index");
     }

  });
}else {
  msg ='<div class="alert alert-dismissible alert-danger">';
  msg += '  <button type="button" class="close" data-dismiss="alert">&times;</button>';
  msg += '<strong>Error</strong> </div>';
  __('pass_error').innerHTML = msg;
}
}else {
  msg ='<div class="alert alert-dismissible alert-danger">';
  msg += '<button type="button" class="close" data-dismiss="alert">x</button>';
  msg += '<strong>Error:</strong>Campos Basios</div>';
  __('_REG_').innerHTML = msg;

}
}
