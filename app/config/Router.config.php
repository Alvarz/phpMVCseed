<?php

class router_config
{
    public function __construct($path)
    {
        switch ($path) {
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

    public function historia()
    {
        require_once 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->historia();
    }

    public function buscar()
    {
        require_once 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->buscador();
    }

    public function principal()
    {
        require_once 'app/controller/PpalController.php';
        $mvc = new PpalController();
        $mvc->principal();
    }
}
