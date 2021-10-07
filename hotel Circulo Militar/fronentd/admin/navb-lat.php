<!---APP CSS----->
<link rel="stylesheet" href="../css/app.css">
    <!---FONTAWESOME--->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!--BOOTSTRAP--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<div class="page-wrapper chiller-theme toggled">
		<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
			<i class="fa fa-bars"></i>
		</a>
		<nav id="sidebar" class="sidebar-wrapper" style="background: #4EA1BD linear-gradient(
180deg
,#4A51D3,#3FBCE7);"  >
			<div class="sidebar-content">
				<div class="sidebar-brand">
					<a href="#">HOTEL Circulo Militar</a>
					<div id="close-sidebar">
						<i class="fa fa-times"></i>
					</div>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li>
							<a href="clientes.php"> <span>Clientes</span> </a>
							
						</li>
						<li>
							<a href="personal.php"> <span>Personal</span> </a>
							
						</li>
						<li>
							<a href="habitaciones.php"> <span>Habitaciones</span> </a>
						</li>
						<li>
							<a href="articulos.php"> <span>Gestion de Articulos</span> </a>
						</li>
						<li >
							<a href="reservas.php"> <span>Reservaciones</span> </a>
						</li>
						<li>
							<a href="usuarios.php"> <span>Usuarios</span> </a>
						</li>
						<li>
							<a href="cpago.php">Pagos</a> 
						</li>
						<li>
							<a href="servicios.php"> <span>Servicios</span> </a>
						</li>
						<li>
							<a href="migracion.php"> <span>Migración</span> </a>
							
						</li>
					
					</ul>
				</div>
				<!-- sidebar-menu  -->
			</div>
		</nav>
		<!-- page-content" -->
	</div>
	<!-- page-wrapper -->


	<!----SCRIPTS---->
	<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

	<!--JQUERY---->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script>

		$(".sidebar-dropdown > a").click(function() {
			$(".sidebar-submenu").slideUp(200);
			if ($(this).parent().hasClass("active")) {
				$(".sidebar-dropdown").removeClass("active");
				$(this).parent().removeClass("active");
			} 
			else {
				$(".sidebar-dropdown").removeClass("active");
				$(this).next(".sidebar-submenu").slideDown(200);
				$(this).parent().addClass("active");
			}
		});

		$("#close-sidebar").click(function() {
			$(".page-wrapper").removeClass("toggled");
			$("#sidebar").removeClass("col-md-2");
			$("#pantalla").removeClass("col-md-10");
			$("#pantalla").addClass("col-md-12");
		});



		$("#show-sidebar").click(function() {
			$(".page-wrapper").addClass("toggled");
			$("#sidebar").addClass("col-md-2");
			$("#pantalla").removeClass("col-md-12");
			$("#pantalla").addClass("col-md-10");
		});

	</script>
	<!--JQUERY---->

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<!----SCRIPTS---->