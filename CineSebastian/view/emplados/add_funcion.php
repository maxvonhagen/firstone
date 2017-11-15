<?php include('view/emplados/nav_empleados.php') ?>
<style media="screen">
.red{
  color:red;
  }
.form-area
{
  background-color: #FAFAFA;
padding: 10px 40px 60px;
margin: 10px 0px 60px;
border: 1px solid GREY;
}
</style>
<div class="container">
<div class="col-md-8">
    <div class="form-area" style="margin-left:250px;" >
        <div  class="form-group"  role="form">
        <br style="clear:both">
        <div id="_add_funcion_">
        </div>
                    <h3 style="margin-bottom: 25px; text-align: center;">Crear funcion</h3>
                    <div class="form-group img-responsive img-rounded center-block" id="imagen"></div>
                    <div class="form-group">
                      <form method="post" id="formulario" enctype="multipart/form-data">
                        <input type="file" class="btn btn-primary" name="file" id="file" value="imagen">
                     </form>

                    </div>
    				<div class="form-group">

						<input type="text" class="form-control" id="pelicula_nombre" name="pelicula_nombre" placeholder="Pelicula" required>
					</div>
          <legend>Hora Funcion  <span class="glyphicon glyphicon-calendar"></span></legend>
          <div class="form-group">
              <label for="pelicula_hora" class="col-lg-3 control-label">Comienzo</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="pelicula_hora_comienzo" onkeypress="return valida(event)" name="pelicula_hora" placeholder="hora" required>
              </div>
          </div>
          <div class="form-group">
            <label for="pelicula_hora" class="col-lg-3 control-label">Final</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="pelicula_hora_final"  onkeypress="return valida(event)" name="pelicula_hora" placeholder="hora" required>
           </div>
          </div>
          <br />
          <legend> Sala <span class="glyphicon glyphicon-blackboard"></span></legend>
          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Sala</label>
            <div class="col-lg-4">
              <select class="form-control" id="pelicula_sala" name="Numero Sala">
                <?php for ($i=0; $i < NUM_SALAS ; $i++) {
                echo '<option>A'.$i.'</option>';
                } ?>
              </select>
            </div>
          </div>
          <legend></legend>
          <div class="form-group">
                <div class="col-lg-12 col-lg-offset-4">
                  <button type="reset" class="btn btn-default">Cancel</button>
                  <button type="button" onclick="add_funcion()" class="btn btn-primary">Enviar</button>
                </div>
              </div>
      </div>
    </div>
</div>
</div>

 <script>

   </script>

<script src="assets/js/add_funcion.js" charset="utf-8"></script>
