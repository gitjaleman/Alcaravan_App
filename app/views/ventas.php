<br>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card shadow" >
					<div class="card-header ui-sortable-handle">
						<h3 class="card-title"> <i class="nav-icon fa fa-handshake-o"></i> Ventas</h3>
						<div class="card-tools">
							<button type="button" class="btn btn-default btn-sm" onclick="nuevo()">
								<i class="fa fa-user-plus" ></i>
								Crear Nuevo
							</button>
							<button type="button" class="btn btn-default btn-sm" onclick="listar()">
								<i class="fa fa-list" ></i>
								Listar
							</button>
						</div>
					</div>
					<div id="main_box" class="card-body" style="min-height: 350px;"></div>
					<div id="loader_box" class="overlay "><i class="fa fa-3x fa-circle-o-notch fa-spin"></i></div>
				</div>
			</div>
		</div>
	</div>
</section>