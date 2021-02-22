<?php

  Router::add("index",                "ApiController",  "index");

  Router::add("login",                "ApiController",  "login");

  Router::add("asociados",            "ApiController",  "asociados");
  Router::add("asociado_insert",      "ApiController",  "asociado_insert");
  Router::add("asociado_get",         "ApiController",  "asociado_get");
  Router::add("asociado_update",      "ApiController",  "asociado_update");
  Router::add("asociado_delete",      "ApiController",  "asociado_delete");

  Router::add("lotes_get",            "ApiController",  "lotes_get");
  Router::add("lote_select",          "ApiController",  "lote_select");
  Router::add("lotes_filter",         "ApiController",  "lotes_filter");

?>