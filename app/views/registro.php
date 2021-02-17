<br>

<section class="content">
  <div class="container-fluid">


    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><i class="nav-icon fa fa-pencil-square-o"></i> Registro Asociados</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-default btn-sm" onclick="frm()">
            <i class="fa fa-user-plus"></i>
            Crear Nuevo
          </button>
          <button type="button" class="btn btn-default btn-sm" onclick="tbl()">
            <i class="fa fa-list"></i>
            Listar
          </button>
        </div>
      </div>
      <div class="box-body" style="min-height: 350px;">

        <div id="box_tbl"  class=" box_data table-responsive" style="display: none;">

          <table id="tbl" class=" table table-bordered table-hover">
            <thead>
              <tr>
                <th>CÉDULA</th>
                <th>NOMBRE</th>
                <th>TELÉFONO</th>
                <th>CORREO</th>
                <th style="max-width: 40px;"></th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>

        </div>





  






        <div id="box_frm" class="box_data" style="display: none;">
          <form id="frm" class=" row" >
            <div class="col-md-6">
              <div class="form-group">
                <label>CEDULA</label>
                <input type="text" name="cedula" class="form-control" required>
              </div>
              <div class="form-group">
                <label>FECHA EXPEDICIÓN</label>
                <input type="date" name="fexpedicion" class="form-control" required>
              </div>
              <div class="form-group">
                <label>TELEFONO</label>
                <input type="tel" name="telefono" class="form-control" required>
              </div>
              <div class="form-group">
                <label>LUGAR DE RECIDENCIA</label>
                <input type="text" name="lrecidencia" class="form-control" required>
              </div>
              <div class="form-group">
                <label>OCUPACIÓN</label>
                <input type="text" name="ocupacion" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>NOMBRE</label>
                <input type="text" name="nombre" class="form-control" required>
              </div>
              <div class="form-group">
                <label>LUGAR DE EXPEDICIÓN</label>
                <input type="text" name="lexpedicion" class="form-control" required>
              </div>
              <div class="form-group">
                <label>CORREO</label>
                <input type="email" name="correo" class="form-control" required>
              </div>
              <div class="form-group">
                <label> DIRECIÓN</label>
                <input type="text" name="direccion" class="form-control" required>
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

      <div id="loader_box" class="overlay " style="display: none;"><i class="fa fa-3x fa-circle-o-notch fa-spin"></i></div>
    </div>






  </div>
</section>