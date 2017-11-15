<?php include('view/emplados/nav_empleados.php') ?>
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed" rel="stylesheet">
<style media="screen">
  .letra{
    font-family: 'Saira Condensed', sans-serif;
    font-size: 25px;
    margin-top: 50px;
  }
  .tr-tablas{

  }
</style>

<div class="container">
    <div class="row">


        <div class="col-md-12">
        <h4>Peliculas En Funcion</h4>
        <div class="table-responsive">


          <?php if (isset($_GET['delete'])) {
            if ($_GET['delete'] == true) {
        echo '  <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Funcion</strong>  Eliminada.
          </div>';
            }
          } ?>
              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>IMG</th>
                   <th> ID</th>
                    <th>Pelicula</th>
                     <th>funciones</th>
                     <th>Sala</th>
                     <th>Estado</th>
                     <th>Crear</th>
                       <th>Editar</th>
                       <th>Eliminar</th>
                   </thead>
    <tbody>


    </tbody>
    <?php if (false != $this->_funciones) {
      foreach ($this->_funciones as $f ) {
        echo '<tr class="tr-tablas">

        <td><input type="checkbox" class="checkthis" /></td>
        <td><img src="view/app/img/img_funciones/'.$f['imagen'].'" alt="" width="'.IMG_ALTURA.'"></td>
        <td><P class="letra">'.$f['id_funciones'].'</td>
        <td><P class="letra">'.$f['pelicula'].'</P></td>
        <td><P class="letra">'.$f['hora'].'</P></td>
        <td><P class="letra">'.$f['sala'].'</P></td>
        <td><P class="letra">'.$f['pelicula'].'</P></td>
        <td><p  class="letra" data-placement="top" data-toggle="tooltip" title="Add"><a href="?c=employee&m=asignar&id='.$f['id_funciones'].'" class="btn btn-success btn-xs" data-title="Add" ><span class="glyphicon glyphicon-send"></span></a></p></td>
        <td><p  class="letra"data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit'.$f['id_funciones'].'" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td><p  class="letra" data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete'.$f['id_funciones'].'" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
        </tr>';
        echo '<div class="modal fade" id="edit'.$f['id_funciones'].'" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
              <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Editar funciones de '.$f['pelicula'].'</h4>
              </div>
                  <div class="modal-body">
                  <div class="form-group">
                  <label for="">Pelicula</label>
                <input class="form-control " type="text"  value="'.$f['pelicula'].'">
                </div>
                <div class="form-group">
<label for="">hora Funciones</label>
                <input class="form-control " type="text" placeholder="Irshad" value="'.$f['hora'].'">
                </div>
                <div class="form-group">

                <input class="form-control " type="text" placeholder="Irshad" value="'.$f['sala'].'">
                </div>
              </div>
                  <div class="modal-footer ">
                <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
              </div>
                </div>
            <!-- /.modal-content -->
          </div>
              <!-- /.modal-dialog -->
            </div>';
            echo '    <div class="modal fade" id="delete'.$f['id_funciones'].'" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                  <div class="modal-dialog">
                <div class="modal-content">
                      <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Eliminar La Pelicula "'.$f['pelicula'].'"</h4>
                  </div>
                      <div class="modal-body">

                   <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta Seguro De Eliminar esta funcion?</div>

                  </div>
                    <div class="modal-footer ">
                    <a href="?c=employee&m=delete_funcion&id='.$f['id_funciones'].'" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Si</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                  </div>
                    </div>
                <!-- /.modal-content -->
              </div>
                  <!-- /.modal-dialog -->
                </div>';

      }
    } else {
      # code...
    }
  ; ?>


</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

            </div>

        </div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$("#mytable #checkall").click(function () {
      if ($("#mytable #checkall").is(':checked')) {
          $("#mytable input[type=checkbox]").each(function () {
              $(this).prop("checked", true);
          });

      } else {
          $("#mytable input[type=checkbox]").each(function () {
              $(this).prop("checked", false);
          });
      }
  });

  $("[data-toggle=tooltip]").tooltip();
});


</script>
