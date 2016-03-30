<?php

class router_config
{
    public function __construct($path)
    {
        switch ($path) {
        case 'agentInfo':
          $this->agentsPath();
          break;
          case 'history':
            $this->historia();
            break;
            case 'buscar':
            $this->buscar();
              break;
        default:
          $this->principal();
          break;
      }
    }

    public function agentsPath()
    {
        require 'app/controller/agentsController.php';
        $mvc = new agentsController();
        $mvc->AgentInfo('RATRACE2');
    }

    public function historia()
    {
        require 'app/controller/ppalController.php';
        $mvc = new ppalController();
        $mvc->historia();
    }

    public function buscar()
    {
        require 'app/controller/ppalController.php';
        $mvc = new ppalController();
        $mvc->buscador();
    }

    public function principal()
    {
        require 'app/controller/ppalController.php';
        $mvc = new ppalController();
        $mvc->principal();
    }
}
