<?php

  /**
   *@author Carlos Alvarez <carlosxviii@gmail.com>
   */

  /**
   * @todo errors, revisar el procedure en el servidor
   *
   * @param varchar[40] $startDate, varchar[40] $endDate, varchar[10] $PlayerName, int $IdTransaction
   *
   * @return json
   */
  function ReportPlayerTransactions($startDate, $endDate, $PlayerName, $IdTransaction)
  {
      // Produce: <body text='black'>
    //codifica la estructura de las fechas
      $startDate_mod = str_replace('/', '-', $startDate);
      $endDate_mod = str_replace('/', '-', $endDate);
      // Obtener los datos del header
     $app = \Slim\Slim::getInstance();
      $prodecedure = 'sp_ReportPlayerTransactions';
      $Url = BASE_URL.$prodecedure.'&p1='.$startDate_mod.'&p2='.$endDate_mod.'&p3='.$PlayerName.'&p4='.$IdTransaction;
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

        //return $output;
  }

 /**
  * @param int $Player_ID, int $IdAgent
  *
  * @return json
  */
 function Report_Statistic_Web($IdAgent, $idplayer)
 {
     // Obtener los datos del header
    $app = \Slim\Slim::getInstance();
     $prodecedure = 'sp_Report_Statistic_Web';
     $Url = BASE_URL.$prodecedure.'&p1='.$IdAgent.'&p2='.$idplayer;
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

       //return $output;
 }

/**
 * @param int $Player_ID, int $IdAgent
 *
 * @return json
 */
function CMO_PlayerAvailability($Player_Name, $IdAgent)
{
    // Obtener los datos del header
    $app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_CMO_PlayerAvailability';
    $Url = BASE_URL.$prodecedure.'&p1='.$Player_Name.'&p2='.$IdAgent;
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
    $clean = trim($output, "\ ");
    echo json_encode($clean);
       //return $output;
}

/**
 * @param int $Player_ID, int $IdAgent
 *
 * @return json
 */
function Player_GetStatistics($Player_ID, $IdAgent)
{
    // Obtener los datos del header
    $app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_Player_GetStatistics';
    $Url = BASE_URL.$prodecedure.'&p1='.$Player_ID.'&p2='.$IdAgent;
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

       //return $output;
}

/**
 * @param int $IdAgent
 *
 * @return json
 */


function ReportPlayerInfo($Player_ID)
{
    //$app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_ReportPlayerInfo';
    $Url = BASE_URL.$prodecedure.'&p1='.$Player_ID;
    $ch = curl_init();
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
    // Timeout in seconds
       //curl_setopt($ch, CURLOPT_TIMEOUT, 10);

       // Download the given URL, and return output
       $output = curl_exec($ch);

       // Close the cURL resource, and free system resources
       curl_close($ch);
       echo $output;
       //return $output;
}
