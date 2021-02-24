<?php
class ApiController{
  public function index()                   {Restapi::render("index");}

  public function login()                   {Restapi::render("login");}

  public function asociados()               {Restapi::render("asociados");}
  public function asociado_insert()         {Restapi::render("asociado_insert");}
  public function asociado_get()            {Restapi::render("asociado_get");}
  public function asociado_update()         {Restapi::render("asociado_update");}
  public function asociado_delete()         {Restapi::render("asociado_delete");}
  public function asociado_cedula()         {Restapi::render("asociado_cedula");}

  public function lote_select()             {Restapi::render("lote_select");}
  public function lote_id()                 {Restapi::render("lote_id");}
  public function lotes_get()               {Restapi::render("lotes_get");}
  public function lotes_filter()            {Restapi::render("lotes_filter");}
 
}
?>
