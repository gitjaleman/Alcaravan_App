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
    $("#as1_manzana").html(data.manzana);
    $("#as1_lote").html(data.lote);
    $("#as1_detalle").html(data.detalle);
    $("#as2_operaciones").html(data.operaciones);
    $("#as3_facturacion").html("$ " + fNumero(data.saldof, 0));
    $("#venta_id").val(data.id);
    $("#venta_detalle").val(data.detalle);
    $("#facturaventa_id").html("0" + data.id);
    var estado = data.estado;
    if (estado == "libre") {
      $("#loader_box").slideUp(0);
      $("#lote_venta").slideDown(0);
    } else {
      $("#info_cedula").val(data.cedula);
      $("#info_nombre").val(data.nombre);
      $("#info_fecha").val(data.finicial);
      $("#info_precio").val("$ " + fNumero(data.pventa, 0));
      $("#info_inicial").val("$ " + fNumero(data.cinicial, 0));
      $("#info_cuotas").val(data.ncuotas);
      $("#info_mensual").val("$ " + fNumero(data.vmensual, 0));
      $("#info_saldo").val("$ " + fNumero(data.saldo, 0));
      $("#info_detalle").val(data.detalle);
      $("#loader_box").slideUp(0);
      $("#lote_info").slideDown(0);
    }
  });
}

function b_asociado() {
  var c = $("#venta_cedula").val();
  $.ajax({
    type: "GET",
    url: http + "/rest/api/asociado_cedula?c=" + c,
  }).done(function (i) {
    var d = i.data;
    if (d == null) {
      alert("NO HAY RESULTADOS");
      $("#valor_nombre").val("VALOR NO VALIDO");
    } else {
      $("#venta_nombre").val(d.nombre);
      $("#valor_nombre").val(d.nombre);
      $("#facturaventa_cedula").html(d.cedula);
      $("#facturaventa_nombre").html(d.nombre);
      $("#facturaventa_telefono").html(d.telefono);
      $("#facturaventa_direccion").html(d.direccion);
    }
  });
}

function buscar_asociado() {
  var c = $("#cambio_cedula_venta").val();
  $.ajax({
    type: "GET",
    url: http + "/rest/api/asociado_cedula?c=" + c,
  }).done(function (i) {
    var d = i.data;
    if (d == null) {
      alert("NO HAY RESULTADOS");
      $("#cambio_nombre_venta").val("VALOR NO VALIDO");
    } else {
      $("#cambio_nombre_venta").val(d.nombre);
      $("#v_cambio_nombre_venta").val(d.nombre);
    }
  });
}

function calcular_venta() {
  $("#frm_venta").on("submit", function (e) {
    e.preventDefault();
    var vprecio = $("#venta_precio").val();
    var cinicial = $("#venta_inicial").val();
    var ncuotas = $("#venta_cuotas").val();
    var fInicial = $("#venta_fecha").val();
    $("#facturaventa_fecha").html(fInicial);
    var saldo = vprecio - cinicial;
    $("#m_calcular_venta").modal("show");
    $("#facturaventa_valor").html("$ " + fNumero(vprecio, 0));
    $("#facturaventa_inicial").html("$ " + fNumero(cinicial, 0));
    $("#facturaventa_cuotas").html(ncuotas);
    $("#facturaventa_saldo").html("$ " + fNumero(saldo, 0));
    $("#facturaventa_fecha").html(fInicial);
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
  var user = localStorage.getItem("user_user");
  var precio = $("#venta_precio").val();
  var inicial = $("#venta_inicial").val();
  var cuotas = $("#venta_cuotas").val();
  var fecha = $("#venta_fecha").val();
  var cedula = $("#venta_cedula").val();
  var nombre = $("#venta_nombre").val();
  var lote = $("#venta_detalle").val();
  var id = $("#venta_id").val();
  var url =
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
    "&nombre=" +
    nombre +
    "&id=" +
    id;
  $.ajax({
    type: "GET",
    url: url,
  }).done(function (i) {
    console.log(i);
    window.location.reload();
  });
}

function anular_venta() {
  var id = $("#venta_id").val();
  var lote = $("#info_detalle").val();
  $.ajax({
    type: "GET",
    url: http +"/rest/api/anular_venta?id="+id+"&lote="+code
  }).done(function (i) {
    window.location.reload();
  });
}
