<br>
<section class="content">
	<div class="container-fluid">

		<div class="row">

			<div class="col-md-3">
				<div class="info-box">
					<span class="info-box-icon bg-teal"><i class="fa fa-map-o"></i></span>
					<div class="info-box-content">
						<span class="username"> MANZANA <span class="text-muted pull-right" id="v_manzana">-</span></span>
						<br>
						<span class="username"> LOTE <span class="text-muted pull-right" id="v_lote">-</span></span>
						<center>
							<span class="info-box-number" style="margin-top: 10px;color:#006266" id="v_detalle">-</span>
						</center>
					</div>
				</div>
				<div class="small-box bg-teal">
					<div class="inner">
						<h3 id="v_operaciones">0</h3>

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
						<span class="info-box-number" id="v_facturacion">$ 0</span>
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
								<input type="number" id="v_i_cedula" class="form-control" required>
								<span class="help-block"># Cédula</span>
							</div>
							<div class="col-xs-6">
								<input type="text" id="v_i_nombre" class="form-control" disabled>
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
								<input type="number" id="v_b_precio" class="form-control" required>
								<span class="help-block">Precio Lote</span>
							</div>
							<div class="col-xs-3">
								<input type="number" id="v_b_inicial" class="form-control" required>
								<span class="help-block">Cuota Inicial</span>
							</div>
							<div class="col-xs-2">
								<input type="number" id="v_b_cuotas" min="1" max="34" class="form-control" required>
								<span class="help-block">Cuotas Restantes</span>
							</div>
							<div class="col-xs-3">
								<input type="date" id="v_b_fecha" class="form-control" required>
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



					</div>
					<div class="box-footer">

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
								<table class="table  table-condensed" >
									<tbody>
										<tr style="border: none;">
											<th style="border: none; max-width: 100px;  width: 100px;">Cédula:</th>
											<td style="border: none; " id="m_i_c_cedula">-</td>
											<th style="border: none; max-width: 100px;  width: 100px;">Nombre:</th>
											<td style="border: none;" id="m_i_c_nombre">-</td>
										</tr>
										<tr style="border: none;">
											<th style="border: none; max-width: 100px;  width: 100px;">Teléfono:</th>
											<td style="border: none;" id="m_i_c_telefono">-</td>
											<th style="border: none; max-width: 100px;  width: 100px;">Dirección:</th>
											<td style="border: none;" id="m_i_c_direccion">-</td>
										</tr>
									</tbody>
								</table>
						</div>
						<div class="col-xs-4">
								<table class="table table-bordered table-condensed">
									<tbody>
										<tr>
											<th>N°</th>
											<td id="m_i_c_id" style="color: #e74c3c;font-weight: bold;">012</td>
											<th>Fecha</th>
											<td id="m_i_c_fecha" >-</td>
										</tr>
										<tr>
											<th>Valor</th>
											<td id="m_i_c_valor"> - </td>
											<th>C Inicial</th>
											<td id="m_i_c_inicial">-</td>
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
							Información detallada de medios de pago dirección de oficina y demás información relevante que permita al cliente  realizar sus aportes oportunamente
							</p>
						</div>
						<div class="col-xs-4">
						<table class="table">
              <tbody><tr>
                <th>Cuotas:</th>
                <td id="m_i_c_cuotas">-</td>
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
                <td> <h3 id="m_i_c_saldo">-</h3></td>
              </tr>
            </tbody></table>

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