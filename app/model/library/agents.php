<?php
define('BASE_URL', 'http://dgsproxy.asbnap.com/apps/marapi.php?sp=');
define('BASE_URL_GAMES', 'http://dgsproxy.asbnap.com/apps/marapi.php?');
 /**
  *@author Carlos Alvarez <carlosxviii@gmail.com>
  */

 /**
  * @param varchar[40] $startDate, varchar[40] $endDate, int $IdAgent
  *
  * @return json
  */
 function Report_SportsBookStatRecap($startDate, $endDate, $IdAgent)
 {
     // Obtener los datos del header
     $startDate_mod = str_replace('/', '-', $startDate);
     $endDate_mod = str_replace('/', '-', $endDate);
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_Report_SportsBookStatRecap';
     $Url = BASE_URL.$prodecedure.'&p1='.$startDate_mod.'&p2='.$endDate_mod.'&p3='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

    // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

 /**
  * @param varchar[40] $startDate, varchar[40] $endDate, int $IdAgent
  *
  * @return json
  */
 function RemoteAgentTicker($startDate, $endDate, $IdAgent)
 {
     // Obtener los datos del header
     $startDate_mod = str_replace('/', '-', $startDate);
     $endDate_mod = str_replace('/', '-', $endDate);
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_RemoteAgentTicker';
     $Url = BASE_URL.$prodecedure.'&p1='.$startDate_mod.'&p2='.$endDate_mod.'&p3='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

 /**
  * @param int $IdAgent
  *
  * @return json
  */
 function ExtMasterList($IdAgent)
 {
     // Obtener los datos del header
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_extMasterList';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

 /**
  * @param varchar[10] $AgentName
  *
  * @return json
  */
 function AgentInfo($AgentName)
 {
     // Obtener los datos del header
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_AgentInfo';
     $Url = BASE_URL.$prodecedure.'&p1='.$AgentName;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }
 /**
  * @param int $IdAgent
  *
  * @return json
  */
 function Report_Winnings($IdAgent)
 {
     // Obtener los datos del header
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_Report_Winnings';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

/**
 * @param int $IdAgent
 *
 * @return json
 */
function ReportAgentRightInfo($IdAgent)
{
    // Obtener los datos del header
    //$app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_ReportAgentRightInfo';
    $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

       // Download the given URL, and return output
    $output = curl_exec($ch);

       // Close the cURL resource, and free system resources
    curl_close($ch);

       return $output;
}

 /**
  * @param none
  *
  * @return json
  */
 function ReportAgentRights()
 {
     // Obtener los datos del header
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_ReportAgentRight';
     $Url = 'http://dgsproxy.asbnap.com/apps/marapi.php?sp=sp_ReportAgentRight';
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

/**
 * @param varchar[10] $Agent_Name, int $IdMaster, tinyint $OutResult
 *
 * @return json
 */
function CMo_AgentAvailability($Agent_Name, $IdMaster, $OutResult)
{
    // Obtener los datos del header
    //$app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_CMo_AgentAvailability';
    $Url = BASE_URL.$prodecedure.'&p1='.$Agent_Name.'&p2='.$IdMaster.'&p3='.$OutResult;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

       // Download the given URL, and return output
    $output = curl_exec($ch);

       // Close the cURL resource, and free system resources
    curl_close($ch);

       return $output;
}

 /**
  * @param int $IdMaster, int $IdDistributor, int $IdAgent
  *
  * @return json
  */
 function DropBoxInfo_MasterAgentList($IdMaster, $IdDistributor, $IdAgent)
 {
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_DropBoxInfo_MasterAgentList';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdMaster.'&p2='.$IdDistributor.'&p3='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

 /**
  * @param int $IdAgent
  *
  * @return json
  */
 function DropBoxInfo_MasterList($IdAgent)
 {
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_DropBoxInfo_MasterList';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }
 /**
  * @param int $IdAgent
  *
  * @return json
  */
 function DropBoxInfo_PlayerAgentList($IdAgent)
 {
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_DropBoxInfo_PlayerAgentList';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }

 /**
  * @param varchar[10] $agentName, int $permissionlvl lvl 1 - 4
  *
  * @return json
  */
 function ToolAgentLogin($agentName, $permissionlvl)
 {
     //$app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_ToolAgentLogin';
     $Url = BASE_URL.$prodecedure.'&p1='.$agentName.'&p2='.$permissionlvl;
     $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);

        return $output;
 }
/**
 * @param int $IdAgent
 *
 * @return json
 */
function DropBoxInfo_TransactionType($IdAgent)
{
    //$app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_DropBoxInfo_TransactionType';
    $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

       // Download the given URL, and return output
    $output = curl_exec($ch);

       // Close the cURL resource, and free system resources
    curl_close($ch);

       return $output;
}

/**
 * @todo Repair matchs on tables agents and DB prodecedure
 *
 * @param int $IdAgent
 *
 * @return json
 */
function ReportAgentInfo($IdAgent)
{
    //$app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_ReportAgentInfo';
    $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

       // Download the given URL, and return output
    $output = curl_exec($ch);

       // Close the cURL resource, and free system resources
    curl_close($ch);

       return $output;
}
