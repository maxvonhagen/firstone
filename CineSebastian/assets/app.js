function comprimirAjax(){
    var dato1 =$('#dato1').val();
    $.ajax({
     type: 'post',
     url : '?c=index&m=comprimir',
     data: {dato1 : dato1},
     success (response){
         $('#encriptado').html(response);
     }
      
});
}

function descomprimirAjax(){
    var dato2 =$('#dato2').val();
    $.ajax({
     type: 'post',
     url : '?c=index&m=descomprimir',
     data: {dato2 : dato2},
     success (response){
         alert(response);
     }
      
});
  
}

  




