<?php
//header("Access-Control-Allow-Origin: *");
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
  // Access-Control headers are received during OPTIONS requests
  if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
          header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
      }

      if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
          header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
      }
  }
// Activamos las sesiones para el funcionamiento de flash['']
@session_start();

require 'Slim/Slim.php';
require 'library/config.php';
require 'library/funciones.php';
require 'library/players.php';
require 'library/agents.php';
require 'library/wagers.php';
require 'library/server.php';
require 'library/games.php';

// El framework Slim tiene definido un namespace llamado Slim
// Por eso aparece \Slim\ antes del nombre de la clase.
\Slim\Slim::registerAutoloader();

// Creamos la aplicación.
$app = new \Slim\Slim();
$app->config(array(
  'templates.path' => 'vistas',
));
// Indicamos el tipo de contenido y condificación que devolvemos desde el framework Slim.
$app->contentType('text/json; charset=utf-8');
$app->get('/', function () {
  echo 'Pagina de gestión API REST de mi aplicación.';
});

/*********************************************************
**********************PLAYERS******************************
***********************************************************/

$app->get('/players/:idplayer', 'authenticate', 'ReportPlayerInfo'); //return the player info
//http://localhost/db_link/api/index.php/players/Player_GetStatistics/297/1292
$app->get('/players/Player_GetStatistics/:idplayer/:IdAgent', 'authenticate','Player_GetStatistics'); // estadisticas del jugador respecto al agente
$app->get('/players/CMO_PlayerAvailability/:Nameplayer/:IdAgent', 'authenticate','CMO_PlayerAvailability'); // player PlayerAvailability
$app->get('/players/Report_Statistic_Web/:IdAgent/:idplayer', 'authenticate','Report_Statistic_Web'); // estadisticas del jugador en la web respecto al agente
$app->get('/players/ReportPlayerTransactions/:startDate/:endDate/:PlayerName/:IdTransaction', 'authenticate','ReportPlayerTransactions'); // con errores

/*********************************************************
**********************AGENTS******************************
***********************************************************/
$app->get('/agents/:IdAgent', 'authenticate','ReportAgentInfo'); //must return the player info // dont match fields on agents table and procedure fields request
$app->get('/agents/all/ReportAgentRights', 'authenticate','ReportAgentRights'); // report rights of all agents
$app->get('/agents/ReportAgentRight/:IdAgent', 'authenticate','ReportAgentRightInfo'); //report rights if given agent
$app->get('/agents/AgentInfo/:AgentName', 'authenticate','AgentInfo'); // report info of given agent
$app->get('/agents/RemoteAgentTicker/:startDate/:endDate/:IdAgent', 'authenticate','RemoteAgentTicker'); // return remote agent ticker
$app->get('/agents/Report_SportsBookStatRecap/:startDate/:endDate/:IdAgent', 'authenticate','Report_SportsBookStatRecap'); //report Sportbookstats with given range of dates
//report winning
$app->get('/agents/Report_Winnings/:IdAgent', 'authenticate','Report_Winnings'); // return report winning of given agent
//Masters
$app->get('/agents/DropBoxInfo_MasterList/:IdAgent', 'authenticate','DropBoxInfo_MasterList'); //return dropboxinfo master list
$app->get('/agents/DropBoxInfo_MasterAgentList/:IdMaster/:IdDistributor/:IdAgent', 'authenticate','DropBoxInfo_MasterAgentList');
$app->get('/agents/ExtMasterList/:IdAgent', 'authenticate','ExtMasterList');
$app->get('/agents/CMo_AgentAvailability/:Agent_Name/:IdMaster/:OutResult', 'authenticate','CMo_AgentAvailability');
$app->get('/agents/DropBoxInfo_PlayerAgentList/:IdAgent', 'authenticate','DropBoxInfo_PlayerAgentList');
$app->get('/agents/ToolAgentLogin/:agentName/:permissionlvl', 'authenticate','ToolAgentLogin');
$app->get('/agents/DropBoxInfo_TransactionType/:IdAgent', 'authenticate','DropBoxInfo_TransactionType'); //return transactions type of guven agent

/*********************************************************
**********************WAGERS******************************
***********************************************************/

$app->get('/wagers/Report_Wager_Listing_Details/:IdWager', 'authenticate','Report_Wager_Listing_Details');

/*********************************************************
**********************Server******************************
***********************************************************/

$app->get('/server/GetServerTime', 'authenticate','TCS_GetServerTime');

/*********************************************************
**********************GAMES******************************
***********************************************************/

$app->get('/games/RelatedFamilyGames/:idFamilyGame', 'authenticate','RelatedFamilyGames');
$app->get('/games/SearchMoreGamesByGameId/:idGame', 'authenticate','SearchMoreGamesByGameId');
$app->get('/games/SearchTeamNameRangeDates/:TeamName/:startDate/:endDate', 'authenticate','SearchTeamNameRangeDates');

/*********************************************************
*************************APP_RUN*****************************
***********************************************************/

$app->run();
