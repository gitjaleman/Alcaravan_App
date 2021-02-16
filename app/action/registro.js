$(document).ready(function (){
 
});
var http="http://localhost/server/Alcaravan_app";
function nuevo() {
  $.ajax({
    type: "GET",
    url: "../app/models/registro/form.php"
  }).done(function (i) {
    $("#main_box").html(i);
  });
}

function listarm(){
  $.ajax({
    type: "GET",
    url: "../app/models/registro/table.php"
  }).done(function (i) {
    $("#main_box").html(i);


  });






}


function listar(){
  $('#tbl').dataTable(
  {
    "aProcessing": true,
    "aServerSide": true,
    dom: 'Bfrtip',
    buttons: [ 'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdf'],
    "ajax":{
      url: http+"/rest/api/asociados",
      type : "get",
      dataType : "json",            
      error: function(e){
        console.log(e.responseText);  
      }
    },
    "bDestroy": true,
    "iDisplayLength": 40,
    "columns":[
      {"data":"id"},
      {"data":"cedula"},
      {"data":"nombre"},
      {"data":"telefono"},
      {"data":"correo"},
      {"data": "id",
        "render": function(data, type, row) {
        return '<a href="perfil&id='+data+'" class="btn btn-default "><i class="fa fa-plus-square"></i></a>'
        }
      }
    ]
  }).DataTable();
}





function error() {
  alert("Error al ingresar !");
}
