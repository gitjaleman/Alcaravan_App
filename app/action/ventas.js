$(document).ready(function () {
  filtro();
  search();
});

var http = "https://alcaravan.com.co";

function filtro() {
  $("#frm_f").on("submit", function (e) {
    e.preventDefault();
    var frm = $("#frm_f").serialize();
    $.ajax({
      type: "GET",
      url: http + "/rest/api/lotes_filter",
      data: frm,
    }).done(function (i) {
      var result =i.data;
    $("#box_body").html('');
    for (let  item of  result) {
      $("#box_body").append(item.line+'<button onclick="see('+item.id+')" class="box_lote '+item.estado+'">'+item.detalle+'</button');
    }
    
      
    });
  });
}

function search() {
  $("#frm_s").on("submit", function (e) {
    e.preventDefault();
    var frm = $("#frm_s").serialize();
    $.ajax({
      type: "GET",
      url: http + "/rest/api/lote_select",
      data: frm,
    }).done(function (i) {
      var r =i.data;
      $("#box_body").html('');
      $("#box_body").append('<button onclick="see('+r.id+')" class="box_lote '+r.estado+'">'+r.detalle+'</button');
    });
  });
}

function allData() {
  $.ajax({
    type: "GET",
    url: http + "/rest/api/lotes_get"
  }).done(function (i) {
    var result =i.data;
    $("#box_body").html('');
    for (let  item of  result) {
      $("#box_body").append(item.line+'<button onclick="see('+item.id+')" class="box_lote '+item.estado+'">'+item.detalle+'</button');
    }
  });
}

function see(id){
  window.location="lote?id="+id;
}