$(document).ready(function (){
 
});
var http="http://localhost/server/Alcaravan_app";
function frm() {
  $(".box_data").slideUp(0);
  $("#box_frm").slideDown(0);
  registrar();
}

function tbl(){
  $(".box_data").slideUp(0);
  $("#box_tbl").slideDown(0);
  listar();
}


function listar(){
  $('#tbl').dataTable(
  {
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    "ajax":{
      url: http+"/rest/api/asociados",
      type : "get",
      dataType : "json",            
      error: function(e){
        console.log(e.responseText);  
      }
    },
    "bDestroy": true,
    "iDisplayLength": 10,
    "columns":[
      {"data":"cedula"},
      {"data":"nombre"},
      {"data":"telefono"},
      {"data":"correo"},
      {"data": "id",
        "render": function(data, type, row) {
        return '<a href="asociado?id='+data+'" class="btn btn-sm btn-default "><i class="fa fa-plus-square"></i></a>'
        }
      }
    ]
  }).DataTable();
}


function registrar(){
  $('#frm').on('submit',function(e){ 
    e.preventDefault();
    var frm = $("#frm").serialize();
    $.ajax({
      type: "GET",
      url: http+"/rest/api/insert_asociado",
      data: frm  
    }).done(function(i){
      $("#frm")[0].reset();
      tbl();
    });
  });
}

