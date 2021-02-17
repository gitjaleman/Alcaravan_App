<?php
class ApiController{
  public function index()                   {Restapi::render("index");}
  public function login()                   {Restapi::render("login");}
  public function asociado()                {Restapi::render("asociado");}
  public function asociados()               {Restapi::render("asociados");}
  public function insert_asociado()         {Restapi::render("insert_asociado");}
  public function get_asociado()            {Restapi::render("get_asociado");}
  public function update_asociado()         {Restapi::render("update_asociado");}
  public function delete_asociado()         {Restapi::render("delete_asociado");}
}
?>
