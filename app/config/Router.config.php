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
        require 'app/controller/AgentsController.php';
        $mvc = new AgentsController();
        $mvc->AgentInfo('RATRACE2');
    }

    public function historia()
    {
        require 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->historia();
    }

    public function buscar()
    {
        require 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->buscador();
    }

    public function principal()
    {
        require 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->principal();
    }
}
