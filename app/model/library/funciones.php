<?php
/**
 *@author Carlos Alvarez <carlosxviii@gmail.com>
 */

 /**
  * @param none
  * @return none
  * @access private
  */

function authenticate(\Slim\Route $route) {
  // Obtener los datos del header
  $headers = apache_request_headers();
  $response = array();
  $app = \Slim\Slim::getInstance();
  //header auth key debe ser enviada desde el cliente y borrada de aca
  //$headers['Authorization'] = "4b04ad5c38d6e9ccc627bde792b5b8bc";

  // Verifying Authorization Header
  if (isset($headers['Authorization'])) {

    $auth = "4b04ad5c38d6e9ccc627bde792b5b8bc";
    if ($headers['Authorization'] == $auth)
    return true;
    else {
      $response["error"] = true;
      $response["message"] = "wrong api key";
      echoRespnse(400, $response);
      $app->stop();
    }
  } else {
    // api key is missing in header
    $response["error"] = true;
    $response["message"] = "Api key is misssing";
    echoRespnse(400, $response);
    $app->stop();
  }
}

/**
 * @param int $status_code string $response
 * @return null
 * @access private
 */
function echoRespnse($status_code, $response) {
  $app = \Slim\Slim::getInstance();
  // Http response code
  $app->status($status_code);

  // setting response content type to json
  $app->contentType('application/json');

  echo json_encode($response);
}



/**
 * @param obj $app, string $mail
 * @return bool
 * @access private
 */
function verificarMail($app, $mail) {
  // Obtener los datos del header
  $app = \Slim\Slim::getInstance();

  // Verifying Authorization Header
  if (isset($mail)) {
    $db = new PDO('mysql:host=' . BD_SERVIDOR . ';dbname=' . BD_NOMBRE . ';charset=utf8', BD_USUARIO, BD_PASSWORD);
    // get the api key
    $Email = $mail;
    $consulta = $db->prepare("select * from Usuarios where Email=:param1");

    // En el execute es dónde asociamos el :param1 con el valor que le toque.
    $consulta->execute(array(':param1' => $Email));
    // validating api key
    if ($resultadosMail = $consulta->fetchAll(PDO::FETCH_ASSOC)) {
    return true;
    }else {
      return false;
    }

  } else {
    // api key is missing in header
    return false;
  }
}


?>
