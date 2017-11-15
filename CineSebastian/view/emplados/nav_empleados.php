
<link rel="stylesheet" href="assets/css/nav_empleados.css">

<div class="container">
    <div class="row">
		<div class="btn-group btn-group-justified">
            <div class="btn-group">
                <button type="button" class="btn btn-nav" >
                    <span class="glyphicon glyphicon-folder-close"></span>
    			    <p><a href="?c=employee&m=add_funcion">Crear Funcion</a></p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-calendar"></span>
    			    <p>Calendar</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-globe"></span>
    			    <p>Network</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-leaf"></span>
    			    <p>Ecology</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-time"></span>
    			    <p>Statistics</p>
                </button>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-bell"></span>
    			    <p>Events</p>
                </button>
            </div>
        </div>
	</div>
</div>
<script type="text/javascript">
var activeEl = 2;
$(function() {
  var items = $('.btn-nav');
  $( items[activeEl] ).addClass('active');
  $( ".btn-nav" ).click(function() {
      $( items[activeEl] ).removeClass('active');
      $( this ).addClass('active');
      activeEl = $( ".btn-nav" ).index( this );
  });
});
</script>
