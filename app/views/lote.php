<br>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-teal"><i class="fa fa-map-o"></i></span>
					<div class="info-box-content">
						<span class="username"> MANZANA <span class="text-muted pull-right" id="as1_manzana">-</span></span>
						<br>
						<span class="username"> LOTE <span class="text-muted pull-right" id="as1_lote">-</span></span>
						<center>
							<span class="info-box-number" style="margin-top: 10px;color:#006266" id="as1_detalle">-</span>
						</center>
					</div>
				</div>
				<div class="small-box bg-teal">
					<div class="inner">
						<h3 id="as2_operaciones">0</h3>
						<p>Operaciones</p>
					</div>
					<div class="icon">
						<i class="fa fa-clock-o"></i>
					</div>
					<a href="#" class="small-box-footer">
						Trazabilidad <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
				<div class="info-box bg-teal">
					<span class="info-box-icon"><i class="fa fa-money"></i></span>
					<div class="info-box-content">
						<span class="info-box-text">Facturación</span>
						<span class="info-box-number" id="as3_facturacion">$ 0</span>
						<button type="button" class="btn btn_datos"> VER DATOS </button>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div id="lote_venta" class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Generar Venta</h3>
					</div>
					<form id="frm_venta" class="box-body">
						<br>
						<h5>Datos Comprador</h5>
						<br>
						<div class="row">
							<div class="col-xs-3">
								<input type="number" id="venta_cedula" class="form-control" required>
								<span class="help-block"># Cédula</span>
							</div>
							<div class="col-xs-6">
								<input type="text" id="valor_nombre" class="form-control" disabled>
								<input type="hidden" id="venta_nombre">
								<input type="hidden" id="venta_id">
								<input type="hidden" id="venta_detalle">
								<span class="help-block">Nombre Comprador</span>
							</div>
							<div class="col-xs-3">
								<div onclick="b_asociado()" class="btn btn-block btn-default">Buscar</div>
							</div>
						</div>
						<br>
						<h5>Balance de Compra</h5>
						<br>
						<div class="row">
							<div class="col-xs-3">
								<input type="number" id="venta_precio" class="form-control" required>
								<span class="help-block">Precio Lote</span>
							</div>
							<div class="col-xs-3">
								<input type="number" id="venta_inicial" class="form-control" required>
								<span class="help-block">Cuota Inicial</span>
							</div>
							<div class="col-xs-2">
								<input type="number" id="venta_cuotas" min="1" max="34" class="form-control" required>
								<span class="help-block">Cuotas Restantes</span>
							</div>
							<div class="col-xs-3">
								<input type="date" id="venta_fecha" class="form-control" required>
								<span class="help-block">Fecaha Inicio </span>
							</div>
							<div class="col-xs-1">
								<button type="submit" class="btn btn-block btn-default ">
									<i class="fa fa-calculator" aria-hidden="true"></i>
								</button>
							</div>
						</div>
						<br>
					</form>
				</div>

				<div id="lote_info" class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Información General</h3>
					</div>
					<div class="box-body">
						<p>COMPRADOR</p>
						<div class="row">
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">CÉDULA</span>
									<input type="text" id="info_cedula" class="form-control" disabled>
								</div>
							</div>
							<div class="col-xs-8">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">NOMBRE</span>
									<input type="text" id="info_nombre" class="form-control" disabled>
								</div>
							</div>
						</div>
						<br>
						<P>VENTA</P>
						<div class="row">
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">FECHA</span>
									<input type="text" id="info_fecha" class="form-control" disabled>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">PRECIO</span>
									<input type="text" id="info_precio" class="form-control" disabled>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">C INICIAL</span>
									<input type="text" id="info_inicial" class="form-control" disabled>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">N CUOTAS</span>
									<input type="text" id="info_cuotas" class="form-control" disabled>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">V MENSUAL</span>
									<input type="text" id="info_mensual" class="form-control" disabled>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="input-group">
									<span class="input-group-addon" style="min-width: 120PX;">SALDO</span>
									<input type="text" id="info_saldo" class="form-control" disabled>
									<input type="hidden" id="info_detalle">
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#m_anular_venta">Anular Venta</button>
						<button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#m_cambiar_propietario">Cambiar Propietario</button>
					</div>
				</div>

				<div id="lote_time" class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Trazabilidad</h3>
					</div>
					<div class="box-body">
					</div>
					<div class="box-footer">
					</div>
				</div>

				<div id="lote_factura" class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Facturación</h3>
					</div>
					<div class="box-body">
					</div>
					<div class="box-footer">
					</div>
				</div>

				<center id="loader_box">
					<div class="overlay "><i class="fa fa-3x fa-circle-o-notch fa-spin"></i></div>
				</center>

			</div>
		</div>
	</div>
</section>





<div class="modal fade " id="m_calcular_venta">
	<div class="modal-dialog" style="min-width: 90%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
				<h4 class="modal-title"><i class="fa fa-calculator" aria-hidden="true"></i> Calculando Venta</h4>
			</div>
			<div class="modal-body">
				<section class="invoice">
					<div class="row">
						<div class="col-xs-8">
							<table class="table  table-condensed">
								<tbody>
									<tr style="border: none;">
										<th style="border: none; max-width: 100px;  width: 100px;">Cédula:</th>
										<td style="border: none; " id="facturaventa_cedula">-</td>
										<th style="border: none; max-width: 100px;  width: 100px;">Nombre:</th>
										<td style="border: none;" id="facturaventa_nombre">-</td>
									</tr>
									<tr style="border: none;">
										<th style="border: none; max-width: 100px;  width: 100px;">Teléfono:</th>
										<td style="border: none;" id="facturaventa_telefono">-</td>
										<th style="border: none; max-width: 100px;  width: 100px;">Dirección:</th>
										<td style="border: none;" id="facturaventa_direccion">-</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-xs-4">
							<table class="table table-bordered table-condensed">
								<tbody>
									<tr>
										<th>N°</th>
										<td id="facturaventa_id" style="color: #e74c3c;font-weight: bold;">012</td>
										<th>Fecha</th>
										<td id="facturaventa_fecha">-</td>
									</tr>
									<tr>
										<th>Valor</th>
										<td id="facturaventa_valor"> - </td>
										<th>C Inicial</th>
										<td id="facturaventa_inicial">-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<h2 class="page-header"></h2>
					<div class="row">
						<div class="col-xs-12 table-responsive">
							<table class="table table-striped table-condensed">
								<thead>
									<tr>
										<th>#</th>
										<th>SALDO</th>
										<th>FECHA DE PAGO</th>
										<th>VALOR CUOTA</th>
										<th>APORTE</th>
									</tr>
								</thead>
								<tbody id="tbl_calcular">
								</tbody>
							</table>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-8">
							<p><b>FORMA DE PAGO</b></p>
							<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
								Información detallada de medios de pago dirección de oficina y demás información relevante que permita al cliente realizar sus aportes oportunamente
							</p>
						</div>
						<div class="col-xs-4">
							<table class="table">
								<tbody>
									<tr>
										<th>Cuotas:</th>
										<td id="facturaventa_cuotas">-</td>
									</tr>
									<tr>
										<th>Pagadas</th>
										<td>0</td>
									</tr>
									<tr>
										<th>Vencidas:</th>
										<td>0</td>
									</tr>
									<tr>
										<th>Saldo:</th>
										<td>
											<h3 id="facturaventa_saldo">-</h3>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-default pull-right" onclick="generar_venta()">Aceptar y Continuar</button>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="m_anular_venta">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
				<h4 class="modal-title"> <i class="fa fa-exclamation-triangle"></i> Anular Venta </h4>
			</div>
			<div class="modal-body">
				<p>
					Estas a punto de cancelar la venta.
					<br>
					<br>
					Todas las operaciones y documentos se perderán si continuas con este proceso.
					<br>
					<b>
						<h4> ¿Está seguro de continuar? </h4>
					</b>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger" onclick="anular_venta()">Si, Anular Venta</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="m_cambiar_propietario">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
				<h4 class="modal-title"> Cambiar Propietario </h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-4">
						<input type="number" id="cambio_cedula_venta" class="form-control" required>
						<span class="help-block"># Cédula</span>
					</div>
					<div class="col-xs-6">
						<input type="text" id="cambio_nombre_venta" class="form-control" disabled>
						<input type="hidden" id="v_cambio_nombre_venta">
						<span class="help-block">Nombre Comprador</span>
					</div>
					<div class="col-xs-2">
						<div onclick="buscar_asociado()" class="btn btn-block btn-default">Buscar</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" onclick="cambiar_asociado()">Cambiar Propietario</button>
			</div>
		</div>
	</div>
</div>