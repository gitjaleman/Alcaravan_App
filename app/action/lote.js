$(document).ready(function () {
  getLote();
  calcular_venta();
  
});
var http = "https://alcaravan.com.co";

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

function getLote() {
  var id = getId("id");
  $.ajax({
    type: "GET",
    url: http + "/rest/api/lote_id?id=" + id,
  }).done(function (i) {
    var data = i.data;
    $("#v_manzana").html(data.manzana);
    $("#v_lote").html(data.lote);
    $("#l_detalle").val(data.detalle);
    $("#v_detalle").html(data.detalle);
    $("#v_operaciones").html(data.operaciones);
    $("#v_facturacion").html("$ " + data.saldo);
    $("#m_i_c_id").html("0" + data.id);
    var fechaHoy = new Date();
    $("#m_i_c_fecha").html(fechaHoy);
    var estado = data.estado;
    if (estado == "libre") {
      $("#loader_box").slideUp(0);
      $("#lote_venta").slideDown(0);
    } else {
      $("#loader_box").slideUp(0);
      $("#lote_info").slideDown(0);
    }
  });
}

function b_asociado() {
  var c = $("#v_i_cedula").val();
  $.ajax({
    type: "GET",
    url: http + "/rest/api/asociado_cedula?c=" + c,
  }).done(function (i) {
    var d = i.data;
    if (d == null) {
      alert("NO HAY RESULTADOS");
    } else {
      $("#v_i_nombre").val(d.nombre);
      $("#m_i_c_cedula").html(d.cedula);
      $("#m_i_c_nombre").html(d.nombre);
      $("#m_i_c_telefono").html(d.telefono);
      $("#m_i_c_direccion").html(d.direccion);
    }
  });
}

function calcular_venta() {
  $("#frm_venta").on("submit", function (e) {
    e.preventDefault();
    var vprecio = $("#v_b_precio").val();
    var cinicial = $("#v_b_inicial").val();
    var ncuotas = $("#v_b_cuotas").val();
    var fInicial = $("#v_b_fecha").val();
    var saldo = vprecio - cinicial;
    $("#m_calcular_venta").modal("show");
    $("#m_i_c_valor").html("$ " + fNumero(vprecio, 0));
    $("#m_i_c_inicial").html("$ " + fNumero(cinicial, 0));
    $("#m_i_c_cuotas").html(ncuotas);
    $("#m_i_c_saldo").html("$ " + fNumero(saldo, 0));
    $("#m_i_c_fecha").html(fInicial);
    var cMensual = saldo / ncuotas;
    $("#tbl_calcular").html("");
    var miSaldo = saldo;

    for (var i = 1; i <= ncuotas; i++) {
      var laFecha = fFecha_p(fInicial);
      var sumafecha = sMes(laFecha, i);
      var finalFecha = fFecha_f(sumafecha);

      $("#tbl_calcular").append(
        "<tr><td>" +
          i +
          "</td><td>" +
          fNumero(miSaldo, 0) +
          "</td><td>" +
          finalFecha +
          "</td><td>$ " +
          fNumero(cMensual, 0) +
          "</td><td>-</td></tr>"
      );
      miSaldo = miSaldo - cMensual;
    }
  });
}

function fFecha_f(pfecha) {
  var vFecha = new Date(pfecha);
  var vDia = vFecha.getDate();
  var vMes = vFecha.getMonth() + 1;
  var vAno = vFecha.getFullYear();
  vDia = vDia < 10 ? "0" + vDia : vDia;
  vMes = vMes < 10 ? "0" + vMes : vMes;
  return vAno + "-" + vMes + "-" + vDia;
}

function sMes(pFecha, meses) {
  var vFecha = new Date(pFecha);
  vFecha.setMonth(vFecha.getMonth() + meses);
  return vFecha;
}
function fFecha_p(pFecha) {
  var vFecha = new Date(pFecha.split("-").join("/"));
  return vFecha;
}

function fNumero(amount, decimals) {
  amount += "";
  amount = parseFloat(amount.replace(/[^0-9\.]/g, ""));
  decimals = decimals || 0;
  if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);
  amount = "" + amount.toFixed(decimals);
  var amount_parts = amount.split(","),
    regexp = /(\d+)(\d{3})/;
  while (regexp.test(amount_parts[0]))
    amount_parts[0] = amount_parts[0].replace(regexp, "$1" + "." + "$2");
  return amount_parts.join(",");
}

function generar_venta() {
  var user = localStorage.getItem('user_user');
  var precio = $("#v_b_precio").val();
  var inicial = $("#v_b_inicial").val();
  var cuotas = $("#v_b_cuotas").val();
  var fecha = $("#v_b_fecha").val();
  var cedula = $("#v_i_cedula").val();
  var lote = $("#l_detalle").val();
  var id = getId("id");
  $.ajax({
    type: "GET",
    url:
      http +
      "/rest/api/generar_venta?precio=" +
      precio +
      "&inicial=" +
      inicial +
      "&cuotas=" +
      cuotas +
      "&fecha=" +
      fecha +
      "&user=" +
      user +
      "&lote=" +
      lote +
      "&cedula=" +
      cedula +
      "&id=" +
      id
  }).done(function (i) {

    console.log(i);

  });
}
