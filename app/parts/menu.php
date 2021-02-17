<header class="main-header">
	<a href="index2.html" class="logo">
		<span class="logo-mini"><b>A</b>LC</span>
		<span class="logo-lg"><b>Admin</b>ALC</span>
	</a>
	<nav class="navbar navbar-static-top">
		<a class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu" onclick="salir()">
					<a><span>Salir</span> <i class="fa fa-sign-out" aria-hidden="true"></i> </a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<aside class="main-sidebar">
	<section class="sidebar">
		<br>
		<div class="user-panel">
			<div class="pull-left image">
				<img src="../app/assets/img/man1.png" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>Alexander Pierce</p>
				<a><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<br>
		<ul class="sidebar-menu" data-widget="tree">

			<li id="menu_mapa" style="cursor: pointer;" onclick="menu('mapa')">
				<a><i class="fa fa-map-o"></i> <span>Mapa</span></a>
			</li>
			<li id="menu_registro" style="cursor: pointer;" onclick="menu('registro')">
				<a><i class="fa fa-pencil-square-o"></i> <span>Registro</span></a>
			</li>

			<li id="menu_ventas" style="cursor: pointer;" onclick="menu('ventas')">
				<a><i class="fa fa-handshake-o"></i> <span>Ventas</span></a>
			</li>
			<li id="menu_facturacion" style="cursor: pointer;" onclick="menu('facturacion')">
				<a><i class="fa fa-file-text-o"></i> <span>Facturación</span></a>
			</li>


			<li id="menu_pagos" style="cursor: pointer;" onclick="menu('pagos')">
				<a><i class="fa fa-money"></i> <span>Pagos</span></a>
			</li>
			<li id="menu_gastos" style="cursor: pointer;" onclick="menu('gastos')">
				<a><i class="fa  fa-calculator"></i> <span>Gastos</span></a>
			</li>


			<li id="menu_notificacion" style="cursor: pointer;" onclick="menu('notificacion')">
				<a><i class="fa fa-commenting-o"></i> <span>Notificación</span></a>
			</li>
			<li id="menu_comunicacion" style="cursor: pointer;" onclick="menu('comunicacion')">
				<a><i class="fa fa-comments-o"></i> <span>Comunicación</span></a>
			</li>


			<li id="menu_reportes" style="cursor: pointer;" onclick="menu('reportes')">
				<a><i class="fa fa-line-chart"></i> <span>reportes</span></a>
			</li>
			<li id="menu_usuarios" style="cursor: pointer;" onclick="menu('usuarios')">
				<a><i class="fa fa-user-o"></i> <span>Usuarios</span></a>
			</li>












		</ul>
	</section>
	<!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">






	<!--
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu"  role="button"><i class="fa fa-bars"></i></a>
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
			<a class="nav-link" data-widget="fullscreen"  role="button">
				<i class="fa fa-expand-arrows-alt"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" role="button" onclick="salir()">
				Cerrar Sesión <i class="fa fa-sign-in"></i>
			</a>
		</li>
	</ul>
</nav>

<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<a href="index3.html" class="brand-link">
		<img src="../app/assets/img/admin.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span id="session_user_name" class="brand-text font-weight-light"></span>
	</a>

	<div class="sidebar">
		<br>
		<br>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column  text-sm" data-widget="treeview" role="menu" data-accordion="false">
				<li style="cursor: pointer;" class="nav-item" onclick="menu('mapa')">
					<a class="nav-link">
						<i class="nav-icon fa fa-map-o"></i>
						<p>
							Mapa
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('registro')">
					<a class="nav-link">
						<i class="nav-icon fa fa-pencil-square-o"></i>
						<p>
							Registro
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('ventas')">
					<a class="nav-link">
						<i class="nav-icon fa fa-handshake-o"></i>
						<p>
							Ventas
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('facturacion')">
					<a class="nav-link">
						<i class="nav-icon fa fa-file-text-o"></i>
						<p>
							Facturación
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('pagos')">
					<a class="nav-link">
						<i class="nav-icon fa fa-money"></i>
						<p>
							Pagos
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('gastos')">
					<a class="nav-link">
						<i class="nav-icon fa fa-calculator"></i>
						<p>
							Gastos
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('notificacion')">
					<a class="nav-link">
						<i class="nav-icon fa fa-commenting-o"></i>
						<p>
							Notificación
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('comunicacion')">
					<a class="nav-link">
						<i class="nav-icon fa fa-comments-o"></i>
						<p>
							Comunicación
						</p>
					</a>
				</li>

				<li style="cursor: pointer;" class="nav-item" onclick="menu('reportes')">
					<a class="nav-link">
						<i class="nav-icon fa fa-line-chart"></i>
						<p>
							Reportes
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('basedatos')">
					<a class="nav-link">
						<i class="nav-icon fa fa-database"></i>
						<p>
							Base Datos
						</p>
					</a>
				</li>
				<li style="cursor: pointer;" class="nav-item" onclick="menu('usuarios')">
					<a class="nav-link">
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

-->