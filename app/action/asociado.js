$(document).ready(function () {
  var id = getId("id");
  data(id);
  actualizar();
});
var http = "http://localhost/server/Alcaravan_app";

function getId(_par) {
  var _p = null;
  if (location.search)
    location.search
      .substr(1)
      .split("&")
      .forEach(function (pllv) {
        var s = pllv.split("="),
          ll = s[0],
          v = s[1] && decodeURIComponent(s[1]);
        if (ll == _par) {
          if (_p == null) {
            _p = v;
          } else if (Array.isArray(_p)) {
            _p.push(v);
          } else {
            _p = [_p, v];
          }
        }
      });
  return _p;
}

function data(id) {
  $.ajax({
    type: "GET",
    url: http + "/rest/api/get_asociado?id=" + id,
  }).done(function (i) {
    var d = i["data"];
    $("#cedula").val(d.cedula);
    $("#info_cedula").html(d.cedula)
    $("#fexpedicion").val(d.fexpedicion);
    $("#telefono").val(d.telefono);
    $("#lrecidencia").val(d.lrecidencia);
    $("#ocupacion").val(d.ocupacion);
    $("#nombre").val(d.nombre);
    $("#info_nombre").html(d.nombre)
    $("#lexpedicion").val(d.lexpedicion);
    $("#correo").val(d.correo);
    $("#direccion").val(d.direccion);
    $("#id").val(d.id);
    var fcedula = d.fcedula;
    if (fcedula == "NO") {
      $("#fcedula").html("No hay documento");
    } else {
      $("#fcedula").html("Ver documento");
    }
  });
}

function actualizar() {
  $("#frm").on("submit", function (e) {
    e.preventDefault();
    var frm = $("#frm").serialize();
    $.ajax({
      type: "GET",
      url: http + "/rest/api/update_asociado",
      data: frm,
    }).done(function (i) {
      $("#frm")[0].reset();
      location.reload();
    });
  });
}

function borrar() {
  var miid = getId("id");
  $.ajax({
    type: "GET",
    url: http + "/rest/api/delete_asociado?id=" + miid
  }).done(function (i) {
    window.location = "registro";
  });
}
