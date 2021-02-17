<?php

  Router::add("index",                "ApiController",  "index");
  Router::add("login",                "ApiController",  "login");
  Router::add("asociado",             "ApiController",  "asociado");
  Router::add("asociados",            "ApiController",  "asociados");
  Router::add("insert_asociado",      "ApiController",  "insert_asociado");
  Router::add("get_asociado",         "ApiController",  "get_asociado");
  Router::add("update_asociado",      "ApiController",  "update_asociado");
  Router::add("delete_asociado",      "ApiController",  "delete_asociado");

?>