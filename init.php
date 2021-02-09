<?php 
session_start();
if(isset($_SESSION["conectado"])) { 
  header("Location: public/");
}else{ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="app/assets/img/favicon.png">
  <title>Ingreso</title>
  <link rel="stylesheet" href="app/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="app/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="app/assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="app/assets/img/logo.png">
  </div>
  <br>
  <div class="card">
    <br>
    <div class="card-body login-card-body">
      <form id="frm">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="u" placeholder="Nombre Usuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="p" placeholder="Contraseña" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8"></div>
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block" style="background-color: #104A64; border:#104A64 1px solid;">Ingresar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="app/assets/js/jquery.min.js"></script>
<script src="app/assets/js/bootstrap.min.js"></script>
<script src="app/action/login.js"></script>
</body>
</html>
<?PHP } ?>