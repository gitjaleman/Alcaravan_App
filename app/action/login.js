$(document).ready(function() {
    localStorage.clear();
    login(); 
  });
  var http="https://alcaravan.com.co";
  function login(){
    $('#frm').on('submit',function(e){ 
      e.preventDefault();
      var frm = $("#frm").serialize();
      var url  = http+"/rest/api/login"
      $.ajax({
        type: "GET",
        url: url,
        data: frm  
      }).done(function(i){
        console.log(i);
        var user=i['user'];
        if (user==null) {
          error();
        }else{
          localStorage.setItem('session', true);
          var data =user[0];
          localStorage.setItem('user_name', data['name']);
          localStorage.setItem('user_user', data['user']);
          localStorage.setItem('user_type', data['type']);
          window.location="public/";
        }
      });
    });
  }
  function error(){
    alert('Error al ingresar !')
  }