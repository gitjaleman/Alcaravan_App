<?php
class MainController{
  public function index()             { Response::render("index");   			}
  public function mapa()             	{ Response::render("mapa");   			}
	public function registro()          { Response::render("registro");   	}
  public function ventas()            { Response::render("ventas");   		}
	public function facturacion()       { Response::render("facturacion");  }
  public function pagos()             { Response::render("pagos");   			}
	public function gastos()            { Response::render("gastos");   		}
  public function notificacion()      { Response::render("notificacion"); }
	public function comunicacion()      { Response::render("comunicacion"); }
  public function reportes()          { Response::render("reportes");   	}
	public function basedatos()         { Response::render("basedatos");   	}
  public function usuarios()          { Response::render("usuarios");   	}
  public function asociado()          { Response::render("asociado");   	}
}
?>
