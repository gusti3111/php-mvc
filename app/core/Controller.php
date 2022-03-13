<?php

class Controller
{
  // views
  public function view($view, $data = [])
  {
    require_once '../app/views/' . $view . '.php';
  }
  // models
  public function model($model)
  {
    require_once '../app/models/' . $model . '.php';
    return new $model;
  }
}
