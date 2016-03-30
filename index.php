<?php

require 'app/config/Router.config.php';

if (isset($_GET['action'])) {
 $mvc = new Router_config($_GET['action']);
}else {
  $mvc = new Router_config(null);
}
