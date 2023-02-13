<?php

require("src/models/Model.php");
  class Controller
{

  public function Index()
  {

    $model = new Model();
    $dados = $model->ListarDados();
    include "src/views/View.php";

  }


}

?>