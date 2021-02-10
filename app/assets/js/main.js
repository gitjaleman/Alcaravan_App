$(document).ready(function() {
    var User_Name = localStorage.getItem('user_name');
	var User_User = localStorage.getItem('user_user');
	var User_Type = localStorage.getItem('user_type');
	$("#session_user_name").html(User_Name);
});


function menu(dir){
	window.location=dir;
}
function salir(){
	localStorage.clear();
	window.location="../";
}