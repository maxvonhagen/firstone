function goPlanear(){
var nombre,email,email_empresarial,telefono,telefono_2,origen;
var dia,mes,año,nch_permanencia,hra_llegada,adultos,niños,infantes;
var num_habitaciones,ventilador,ospe,empresa_con,comentarios;
var connect, form, response, result;
nombre = __('nombre').value;
email = __('email').value;
email_empresarial = __('email_empresarial').value;
telefono = __('telefono').value;
telefono_2 = __('telefono_2').value;
origen = __('origen').value;
dia = __('llegada_dia').value;
mes = __('llegada_mes').value;
año = __('llegada_año').value;
nch_permanencia = __('nhe_permanencia').value;
hra_llegada = __('hra_llegada').value;
adultos = __('adultos').value;
niños = __('niños').value;
infantes  = __('infantes').value;
num_habitaciones = __('num_habitaciones').value;
ventilador = __('ventilador').checked == true ?"ventilador": "aire";
ospe = __('opd_si').checked == true ? "si" : "no";
empresa_con = __('empresa_con').value;
comentarios = __('comentarios').value;
if (nombre != "" && email != "" && telefono != "" && origen != "") {
 form ='nombre='+ nombre + '&email='+ email + '&email_empresarial='+ email_empresarial + '&telefono='+telefono;
  form += '&telefono_2='+telefono_2+'&origen='+origen+'&dia='+dia+'&mes='+mes+'&año='+año+'&nch_permanencia='+nch_permanencia;
  form += '&hra_llegada='+hra_llegada+'&adultos='+adultos+'&niños='+niños+'&infantes='+infantes+'&num_habitaciones='+num_habitaciones;
  form += '&ventilador='+ventilador+'&empresa_con='+empresa_con+'&comentarios='+comentarios+'&ospe='+ospe;
  connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
  connect.onreadystatechange = function() {
    if(connect.readyState == 4 && connect.status == 200) {
      if(connect.responseText == 1) {
        result = '<div class="alert alert-dismissible alert-success">';
        result += '<h4>Conectado!</h4>';
        result += '<p><strong>Estamos Registrando Los Datos</strong></p>';
        result += '</div>';
        __('_AJAX_PLAN_').innerHTML = result;
        //location.reload();
      } else {
        __('_AJAX_PLAN_').innerHTML = connect.responseText;
      }
    }else if (connect.readyState != 4) {
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">x</button>';
        result += '<h4>Procesando...</h4>';
        result += '<p><strong>Estamos intentando logearte....</strong></p>';
        result += '</div>';
        __('_AJAX_PLAN_').innerHTML = result;
      }
    }
  connect.open('POST','?c=index&m=insertar',true);
  connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  connect.send(form);
}else {
  result = '<div class="alert alert-dismissible alert-danger">';
  result += '<button type="button" class="close" data-dismiss="alert">x</button>';
  result += '<h4>Error </h4>';
  result += '<p><strong>Deves llenar los campos</strong></p>';
  result += '</div>';
  __('_AJAX_PLAN_').innerHTML = result;
}
}

function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8){
        return true;
    }

    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function limite(id, menor){
var txt;
 txt = __();
 if (txt.value.length >= 8) {
   document.getElementById('jaja').className += ' ';document.getElementById('jaja').className += 'has-error';
"form-group has-error"
 }

}
