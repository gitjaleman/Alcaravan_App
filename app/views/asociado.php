<br>
<section class="content">

  <div class="row">

    <div class="col-md-3">
      <div class="box ">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../app/assets/img/asociado.png">
          <h3 id="info_nombre" class="profile-username text-center">- - - - - - - -</h3>
          <p id="info_cedula" class="text-muted text-center">- - - - - - -</p>
          <br>
          <a class="btn btn-primary btn-block"><b id="fcedula">- - - - - - - -</b></a>
          <br>


          <div class="mailbox-controls">
            <button class="btn btn-default"><i class="fa fa-upload"></i> Subir</button>

            <div class="pull-right">
              <button class="btn btn-danger" data-toggle="modal" data-target="#modal_delete"><i class="fa fa-trash"></i> Borrar</button>
            </div>

          </div>

        </div>
      </div>
      <div class="box ">
        <div class="box-header with-border">
          <h3 class="box-title">LOTES DE ASOCIADO</h3>
        </div>
        <div class="box-body">
          <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked">
              <li><a><i class="fa fa-map-o"></i> Lote <b>A12</b> </a></li>
              <li><a><i class="fa fa-map-o"></i> Lote <b>C03</b> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <div class="box ">
        <div class="box-body">
          <form id="frm" class=" row">
            <div class="col-md-6">
              <div class="form-group">
                <label>CEDULA</label>
                <input type="text" id="cedula" name="cedula" class="form-control" required>
              </div>
              <div class="form-group">
                <label>FECHA EXPEDICIÓN</label>
                <input type="date" id="fexpedicion" name="fexpedicion" class="form-control" required>
              </div>
              <div class="form-group">
                <label>TELEFONO</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" required>
              </div>
              <div class="form-group">
                <label>LUGAR DE RECIDENCIA</label>
                <input type="text" id="lrecidencia" name="lrecidencia" class="form-control" required>
              </div>
              <div class="form-group">
                <label>OCUPACIÓN</label>
                <input type="text" id="ocupacion" name="ocupacion" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NOMBRE</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
              </div>
              <div class="form-group">
                <label>LUGAR DE EXPEDICIÓN</label>
                <input type="text" id="lexpedicion" name="lexpedicion" class="form-control" required>
              </div>
              <div class="form-group">
                <label>CORREO</label>
                <input type="email" id="correo" name="correo" class="form-control" required>
              </div>
              <div class="form-group">
                <label> DIRECIÓN</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
                <input type="hidden" id="id" name="id">
              </div>
              <div class="form-group" style="padding-top: 25px">
                <button type="submit" class="btn btn-success btn-block">
                  <i class="fa fa-save"></i>
                  GUARDAR DATOS
                </button>
              </div>
            </div>
          </form>








        </div>
      </div>

    </div>

  </div>

</section>



<div class="modal fade" id="modal_delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title"> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alerta de seguridad</h4>
      </div>
      <div class="modal-body">
        <p>Estas a punto de borrar todos los datos de un asociado. <b> ¿estas segur@ de continuar?</b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-danger" onclick="borrar()"><i class="fa fa-trash"></i> Si, Borrar Asociado</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal_file" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Default Modal</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>