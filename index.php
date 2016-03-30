<?php
 //require 'app/controller/agentsController.php';
require 'app/config/Router.config.php';
     //se instancia al controlador

// if (isset($_GET['action'])) {
//   // if ($_GET['action'] == 'buscar') {
//   //     //muestra el modulo del buscador
//   //
//   //   $mvc->buscador();
//   // } elseif ($_GET['action'] == 'history') {
//   //     //muestra el modulo "historia de Bolivia"
//   //
//   //   $mvc->historia();
//   // }elseif ($_GET['action'] == 'agentInfo') {
//   //     //muestra el modulo "historia de Bolivia"
//   //
//   //   $mvc->AgentInfo("RATRACE2");
//   // }
//   // elseif (isset($_POST['carrera']) && isset($_POST['cantidad'])) {
//   //     //muestra el buscador y los resultados
//   //
//   //   $mvc->buscar($_POST['carrera'], $_POST['cantidad']);
//   // }
// }
//  else {
//      //Si no existe GET o POST -> muestra la pagina principal
//   $mvc->principal();
//  }

if (isset($_GET['action'])) {
 $mvc = new Router_config($_GET['action']);
}else {
  $mvc = new Router_config(null);
}
