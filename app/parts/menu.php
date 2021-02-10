<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
		</li>
	</ul>
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Buscar . . . " aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fa fa-search"></i>
				</button>
			</div>
		</div>
	</form>
	<ul class="navbar-nav ml-auto">
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fa fa-expand-arrows-alt"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"  role="button" onclick="salir()">
				Cerrar Sesión <i class="fa fa-sign-in"></i> 
			</a>
		</li>
	</ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<a href="index3.html" class="brand-link">
		<img src="../app/assets/img/user2-160x160.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Alexander Pierce</span>
	</a>

	<div class="sidebar">
		<br>
		<br>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column  text-sm" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item" onclick="menu('mapa')">
					<a  class="nav-link" >
						<i class="nav-icon fa fa-map-o"></i>
						<p>
							Mapa
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('registro')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-pencil-square-o"></i>
						<p>
							Registro
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('ventas')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-handshake-o"></i>
						<p>
							Ventas
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('facturacion')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-file-text-o"></i>
						<p>
							Facturación
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('pagos')">
					<a  class="nav-link" >
						<i class="nav-icon fa fa-money"></i>
						<p>
							Pagos
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('gastos')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-calculator"></i>
						<p>
							Gastos
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('notificacion')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-commenting-o"></i>
						<p>
							Notificación
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('comunicacion')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-comments-o"></i>
						<p>
							Comunicación
						</p>
					</a>
				</li>
				
				<li class="nav-item" onclick="menu('reportes')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-line-chart"></i>
						<p>
							Reportes
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('basedatos')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-database"></i>
						<p>
							Base Datos
						</p>
					</a>
				</li>
				<li class="nav-item" onclick="menu('usuarios')">
					<a  class="nav-link">
						<i class="nav-icon fa fa-user-o"></i>
						<p>
							Usuarios
						</p>
					</a>
				</li>
			</ul>
		</nav>

	</div>
</aside>
<div class="content-wrapper">