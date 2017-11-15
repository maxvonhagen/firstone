<link rel="stylesheet" href="assets/css/employee.css">
<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style media="screen">
    .panel
     {
       margin: 5%;
       background: transparent;
     }


     tr
     {
       transition: all 0.5s;
     }
     tr:hover
     {
       background-color: #f0ad4e;
       transition: 0.5s;
     }
     .btn-warning
     {
       transition: all 0.8s;
     }

     .btn-warning:hover, .btn-warning:focus
     {
       transition: 0.8s;
       background-color: #428bca;
       border-color: #428bca;
     }

     .panel-footer
     {
       background-color: #5bc0de;
       color: white;
     }
    </style>
    <div class="container-fluid">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-3">
                <h2 class="text-center pull-left" style="padding-left: 30px;"> <span class="glyphicon glyphicon-list-alt"> </span> Pantalla </h2>
              </div>
              <div class="col-xs-9 col-sm-9 col-md-9">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="col-xs-12 col-md-4">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-body table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center"> A </th>
                  <th class="text-center"> B </th>
                  <th class="text-center"> C </th>
                  <th class="text-center"> D </th>
                  <th class="text-center"> E </th>
                </tr>
              </thead>

              <tbody>


                  <?php
                  $class = "text-success";
                   for ($i=0; $i <= NUM_SILLAS ; $i++) {
                     echo ' <tr class="edit" id="detail">
                           <td id="no" class="text-center"><p class="'.$class.'">'.$i.'</p><input type="checkbox" id="A'.$i.'" value="A'.$i.'"></td>
                           <td id="name" class="text-center"><p class="'.$class.'">'.$i.'</p><input type="checkbox" id="B'.$i.'" value="B'.$i.'"></td>
                           <td id="mobile" class="text-center"> <p class="'.$class.'">'.$i.'</p><input type="checkbox" id="C'.$i.'" value="C'.$i.'"></td>
                           <td id="mail" class="text-center"><p class="'.$class.'">'.$i.'</p><input type="checkbox" id="D'.$i.'" value="D'.$i.'"></td>
                           <td id="city" class="text-center"> <p class="'.$class.'">'.$i.'</p><input type="checkbox" id="E'.$i.'" value="E'.$i.'"></td>
                         </tr>' ;
                   }
                   ?>
              </tbody>
            </table>
          </div>

          <div class="panel-footer">
            <div class="row">
              <div class="col-lg-12">
                <div class="col-md-8">
                  </div>
                  <div class="col-md-4">
                  <p class="muted pull-right"><strong> © 2017 All rights reserved </strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<section id="contact">
			<div class="section-content">
				<h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Cine</span></h1>
				<h3>Registra Los datos/ Cine sillas</h3>
        <div class="col-md-11 form-line"><div id="_peliculas_"></div></div>

			</div>
			<div class="contact-section">

			<div class="container">

				<div>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nombre</label>
					    	<input type="text" class="form-control" id="PEL_nombre" value="<?php echo $_GET['id']?>" placeholder="introdusca Nombre">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Email </label>
					    	<input type="email" class="form-control" id="PEL_email" placeholder=" introdusca email">
					  	</div>
					  	<div class="form-group">
					    	<label for="telephone">pelicula</label>
					    	<input type="tel" class="form-control" id="PEL_pelicula" placeholder=" introdusca Nombre de la pelicula">
			  			</div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description">Cantidad de boletas</label>
                <select class="form-control" id="PEL_boletos_cant">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
			  			</div>
			  			<div>

			  				<button type="button" id="btn_peliculas" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
			  			</div>

					</div>
				</div>
			</div>
		</section>
    <script src="assets/js/peliculas.js">

    </script>
<script type="text/javascript">
$('#btn_peliculas').click(function() {
  var ids,asientos;

  ids = $('input[type=checkbox]:checked').map(function() {
      return $(this).attr('id');
  }).get();
goPeliculas( ids.join('- '));
});

</script>
